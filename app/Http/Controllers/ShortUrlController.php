<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShortUrlRequest;
use App\Models\ShortUrl;
use Arr;
use Illuminate\Http\RedirectResponse;

class ShortUrlController extends Controller
{
    public function create()
    {
        return inertia('ShortUrl/Create');
    }

    public function store(StoreShortUrlRequest $request)
    {
        $shortUrl = ShortUrl::firstOrCreate(Arr::wrap($request->input('link')));

        return inertia('ShortUrl/Show', [
            'link' => $shortUrl->shortLink,
        ]);
    }

    public function show(ShortUrl $shortUrl): RedirectResponse
    {
        return redirect()->away($shortUrl->link);
    }

    public function destroy(ShortUrl $shortUrl): RedirectResponse
    {
        $shortUrl->delete();

        return redirect()->back();
    }
}

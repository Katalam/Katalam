<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ShortUrl extends Model
{
    protected $fillable = [
        'slug',
        'link'
    ];

    protected static function booted()
    {
        static::creating(static function ($shortUrl) {
            $slug = Str::slug(Str::random());
            while (self::where('slug', $slug)->first()) {
                $slug = Str::slug(Str::random());
            }
            $shortUrl->slug = $slug;
        });
    }

    public function getShortLinkAttribute(): string
    {
        return route('short-url.show', $this->slug);
    }
}

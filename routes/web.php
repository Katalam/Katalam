<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ShortUrlController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Controller::class)->name('home');
Route::controller(ShortUrlController::class)
    ->prefix('urls')
    ->as('short-url.')
    ->group(static function () {
        Route::get('/', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{shortUrl:slug}', 'show')->name('show');
    });


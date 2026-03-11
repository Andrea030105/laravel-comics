<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('db.comics');
    $header_menu = config('db.menu');
    $footer_menu = config('db.footerMenu');

    return view('index', compact('comics', 'header_menu', 'footer_menu'));
});

Route::get('index/comic', function ($titolo) {

    $header_menu = config('db.menu');
    $footer_menu = config('db.footerMenu');

    $comics = config('db.comics');
    $titolo = 'Action Comics #1000: The Deluxe Edition';

    foreach ($comics as $comic) {
        if ($comic['title'] == $titolo) {
            return $detail_comic = $comic;
        }
    }

    return view('partials/comic', compact('comics', 'header_menu', 'footer_menu', 'detail_comic'));
});

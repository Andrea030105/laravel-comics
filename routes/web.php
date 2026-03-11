<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('db.comics');
    $header_menu = config('db.menu');
    $footer_menu = config('db.footerMenu');

    return view('index', compact('comics', 'header_menu', 'footer_menu'));
});

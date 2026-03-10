<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('db.comics');
    $header_menu = config('db.menu');

    return view('index', compact('comics', 'header_menu'));
});

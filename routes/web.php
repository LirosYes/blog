<?php

use Illuminate\Support\Facades\Route;

Route::get('/post', function () {
    return view('welcome');
});

Route::get('/post/{posts}', function ($posts) {
    return "sub {$posts}";
});

Route::get('/post/{posts}/{category}', function ($posts, $category) {
    return "sub {$posts} from {$category}";
});

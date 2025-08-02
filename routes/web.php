<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $baseURL = env('BASE_URL');
    return view('welcome', ['baseURL' => $baseURL]);
});

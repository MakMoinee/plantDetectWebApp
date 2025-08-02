<?php

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

Route::get('/', function () {
    $baseURL = env('BASE_URL');
    return view('welcome', ['baseURL' => $baseURL]);
});
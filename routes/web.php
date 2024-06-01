<?php

use Illuminate\Support\Facades\Route;
// Default Route Code //
Route::get('/', function () {
    return view('welcome');
});

// Shorcut Route Code
// Route::view('/', 'welcome');

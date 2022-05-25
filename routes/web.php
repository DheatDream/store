<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'));

Route::get('report', fn () => view('report'));

Route::get('stock', fn () => view('stock'));

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio.index'); // atau 'welcome' kalau masih pakai bawaan Laravel
});

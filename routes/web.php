<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portofolio.index'); // atau 'welcome' kalau masih pakai bawaan Laravel
});

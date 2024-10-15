<?php

use App\Http\Controllers\QuranController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});


Route::get('/quran',[QuranController::class, 'index']);

Route::get('/quran/{id}',[QuranController::class, 'indexId']);
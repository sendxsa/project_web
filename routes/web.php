<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/', function () {
    return view('welcome');
});





Route::get('/data', [DataController::class, 'index']);
Route::post('/data', [DataController::class, 'store']);




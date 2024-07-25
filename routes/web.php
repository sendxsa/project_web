<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DataController;

Route::get('/', function () {
    return view('dashboard.index');
});




Route::get('/isi-form', [App\Http\Controllers\FormController::class, 'showForm'])->name('isi.form');


Route::get('/data', [DataController::class, 'index']);
Route::post('/data', [DataController::class, 'store']);




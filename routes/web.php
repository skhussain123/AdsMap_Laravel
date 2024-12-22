<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ClientController::class, 'index'])->name('index');
Route::get('/insert', [ClientController::class, 'insertpage'])->name('insertpage');
Route::get('/mappage', [ClientController::class, 'mappage'])->name('mappage');
Route::get('/business-register', [ClientController::class, 'businessregpage'])->name('businessregpage');

Route::post('/insert-data', [ClientController::class, 'insertdata'])->name('insertdata');

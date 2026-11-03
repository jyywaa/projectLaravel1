<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/', function () {
    return view('welcome');
});

//route atau alamat untuk buka form
Route::get('/items/create', [ItemController::class, 'create']);

//route untuk memproses form
Route::post('/items', [ItemController::class, 'store'])
    ->name('items.store');

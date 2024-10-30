<?php

use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use App\Models\Shop;

Route::get('/',[ ShopController::class,'indexs'])->name('ofse');
Route::post('/', [ShopController::class,'create'])->name('welcome');
Route::get('/perform', [ShopController::class,'index'])->name('ofse');


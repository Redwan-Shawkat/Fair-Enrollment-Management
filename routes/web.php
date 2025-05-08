<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\ItemController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/',[testController::class,'index']);

route::get('/items',[ItemController::class,'index'])->name('items.index');
route::post('/items',[ItemController::class, 'store'])->name('items.store');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\VisitorController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/',[DashboardController::class,'index']);

route::get('/organization',[OrganizationController::class,'index'])->name('organization.index');
route::get('/visitor',[VisitorController::class,'index'])->name('visitor.index');

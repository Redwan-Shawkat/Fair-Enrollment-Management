<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ProductInterestController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\UserInfoController;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard
route::get('/',[DashboardController::class,'index']);

// Organization
route::get('/organization',[OrganizationController::class,'index'])->name('organization.index');

// Visitors
route::get('/visitor',[VisitorController::class,'index'])->name('visitor.index');

// Product Interest
route::get('/product', [ProductInterestController::class, 'index'])->name('product.index');

// Profession
route::get('/profession', [ProfessionController::class, 'index'])->name('profession.index');

// Promotion
route::get('/promotion', [PromotionController::class, 'index'])->name('promotion.index');

// User
route::get('/user', [UserInfoController::class, 'index'])->name('user.index');

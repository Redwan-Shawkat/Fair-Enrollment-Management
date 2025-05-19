<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ProductInterestController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\DrawstatController;
use App\Http\Controllers\MessageTemplateController;
use App\Http\Controllers\SmsContentController;
use App\Http\Controllers\SmssendController;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard

// Data Read
route::get('/',[DashboardController::class,'index']);

// Organization
// Data Read
route::get('/organization',[OrganizationController::class,'index'])->name('organization.index');

// Visitors

// Data Read
route::get('/visitor',[VisitorController::class,'index'])->name('visitor.index');

// Product Interest

// Data Read
route::get('/product', [ProductInterestController::class, 'index'])->name('product.index');

// Profession

// Data Read
route::get('/profession', [ProfessionController::class, 'index'])->name('profession.index');

// Promotion

// Data Read
route::get('/promotion', [PromotionController::class, 'index'])->name('promotion.index');

// User

// Data Read
route::get('/user', [UserInfoController::class, 'index'])->name('user.index');

//Drawstat

// Data Read
route::get('/drawstat', [DrawstatController::class,'index'])->name('drawstat.index');

//Message

// Data Read
route::get('/messagetemplate', [MessageTemplateController::class,'index'])->name('messagetemplate.index');

//SMS Content

// Data Read
route::get('smscontent', [SmsContentController::class,'index'])->name('smscontent.index');

//SMS Send

// Data Read
route::get('smssend', [SmssendController::class,'index'])->name('smssend.index');

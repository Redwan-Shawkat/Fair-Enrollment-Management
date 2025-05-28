<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductInterestController;
// use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\DrawstatController;
use App\Http\Controllers\MessageTemplateController;
use App\Http\Controllers\SmsContentController;
use App\Http\Controllers\SmssendController;
use App\Http\Controllers\NewmessageController;

// use App\Mail\TestEmail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layouts.dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'post'])->name('profile.post');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function(){
    Route::get('/visitor',[VisitorController::class,'index'])->name('visitor.index');
    Route::get('/visitorform',[VisitorController::class,'create'])->name('visitor.create');
});

Route::middleware('auth')->group(function(){
    Route::get('/company',[CompanyController::class,'index'])->name('company.index');
});

Route::middleware('auth')->group(function(){
    Route::get('/product',[ProductInterestController::class,'index'])->name('product.index');
});

Route::middleware('auth')->group(function(){
    Route::get('/user',[UserController::class,'index'])->name('user.index');
});

Route::middleware('auth')->group(function(){
    Route::get('/profession',[ProfessionController::class,'index'])->name('profession.index');
});

Route::middleware('auth')->group(function(){
    Route::get('/promotion',[PromotionController::class,'index'])->name('promotion.index');
});

Route::middleware('auth')->group(function(){
    Route::get('/drawstat',[DrawstatController::class,'index'])->name('drawstat.index');
});

Route::middleware('auth')->group(function(){
    Route::get('/messagetemplate',[MessageTemplateController::class,'index'])->name('messagetemplate.index');
});

Route::middleware('auth')->group(function(){
    Route::get('/smscontent',[SmsContentController::class,'index'])->name('smscontent.index');
});

Route::middleware('auth')->group(function(){
    Route::get('/smssend',[SmssendController::class,'index'])->name('smssend.index');
});

Route::middleware('auth')->group(function(){
    Route::get('/newmessage',[NewmessageController::class,'index'])->name('newmessage.send');
});

// Mail TEST
// Route::get('/testroute',function(){
//     $name = 'Red';

//     // Mail Sending is completed
//     Mail::to('mailtrapclub@gmail.com')->send(new TestEmail($name))->name('testmail');
// });

require __DIR__.'/auth.php';

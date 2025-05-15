<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\OfferController;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard
route::get('/',[DashboardController::class,'index']);

// Organization
route::get('/organization',[OrganizationController::class,'index'])->name('organization.index');

// Visitors
route::get('/visitor',[VisitorController::class,'index'])->name('visitor.index');

// Offer
route::get('/offer',[OfferController::class, 'index'])->name('offer.index');

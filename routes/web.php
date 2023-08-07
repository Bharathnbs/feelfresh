<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/',[PageController::class, 'home'])->name('home');
Route::get('/our-products',[PageController::class, 'products'])->name('our-products');
Route::get('/contact-us',[PageController::class, 'contact'])->name('contact-us');


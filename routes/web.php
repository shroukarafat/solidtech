<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;



Route::get('/', [HomepageController::class,"index"]);
Route::get('/index.html', [HomepageController::class,"index"]);
Route::get('/about-us', [HomepageController::class, 'aboutUs']);
Route::get('/about-us.html', [HomepageController::class, 'aboutUs']);

Route::get('/contact-us', [HomepageController::class, 'contactUs']);
Route::get('/contact-us.html', [HomepageController::class, 'contactUs']);

Route::get('/port', [HomepageController::class, 'portfolio']);
Route::get('/port.html', [HomepageController::class, 'portfolio']);



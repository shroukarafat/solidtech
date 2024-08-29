<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PortfolioController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('front.index');
});
Route::get('/about-us', function () {
    return view('front.about-us');
});
Route::get('/contact-us', function () {
    return view('front.contact-us');
});

Route::get('/port', function () {
    return view('front.port');
});

Route::resource('about_us', AboutUsController::class);
Route::resource('contact_us',ContactUsController::class);
Route::resource('homepage', HomepageController::class);
Route::resource('portfolio', PortfolioController::class);



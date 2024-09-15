<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\LanguageController;

Route::get('/', [HomepageController::class,"index"]);
Route::get('/index.html', [HomepageController::class,"index"]);
Route::get('/about-us', [HomepageController::class, 'aboutUs']);
Route::get('/about-us.html', [HomepageController::class, 'aboutUs']);

Route::get('/contact-us', [HomepageController::class, 'contactUs']);
Route::get('/contact-us.html', [HomepageController::class, 'contactUs']);

Route::get('/port', [HomepageController::class, 'portfolio']);
Route::get('/port.html', [HomepageController::class, 'portfolio']);

Route::get('/contact-us', [ContactUsController::class, 'showForm'])->name('contact.form');
Route::post('/contact-us', [ContactUsController::class, 'submitForm'])->name('contact.submit');

Route::get('/subscribe', [SubscribeController::class, 'showForm'])->name('subscribe.form');
Route::post('/subscribe', [SubscribeController::class, 'submitForm'])->name('subscribe.submit');

 
Route::get('set-language', [LanguageController::class, 'setLanguage'])->name('set-language');



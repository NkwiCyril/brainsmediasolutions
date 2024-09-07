<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TermsOfServiceController;
use Illuminate\Support\Facades\Route;

    Route::controller(HomeController::class)->name('home.')->group(function () {
        Route::get('/', 'index')->name('index');
    });

    Route::controller(ServiceController::class)->name('services.')->group(function () {
        Route::get('services', 'index')->name('index');
        Route::get('services/{slug}', 'show')->name('show');
    });

    Route::controller(AboutController::class)->name('about.')->group(function () {
        Route::get('about', 'index')->name('index');
    });

    Route::controller(ContactUsController::class)->name('contact-us.')->group(function () {
        Route::get('contact', 'index')->name('index');
        Route::post('contact', 'store')->name('store');
    });

    Route::controller(PrivacyPolicyController::class)->name('privacy-policy.')->group(function () {
        Route::get('privacy-policy', 'index')->name('index');
        Route::get('privacy-policy/{privacy-policy}', 'show')->name('show');
    });

    Route::controller(TermsOfServiceController::class)->name('terms-of-service.')->group(function () {
        Route::get('terms-of-service', 'index')->name('index');
        Route::get('terms-of-service/{terms-of-service}', 'show')->name('show');
    });


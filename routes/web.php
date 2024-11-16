<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use TCG\Voyager\Facades\Voyager;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

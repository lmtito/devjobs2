<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('index');
});
*/
//Route::middleware(['auth'])->group(function() {
    //Route::get('clients/list', [ClientController::class, 'list'])->name('clients.list');
    //Route::get('clients/export', [ClientController::class, 'export'])->name('clients.export');
//});

Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/featured', [HomeController::class, 'featured'])->name('home.featured');
Route::get('/offers', [HomeController::class, 'offers'])->name('home.offers');
Route::get('/apply', [HomeController::class, 'apply'])->name('home.apply');

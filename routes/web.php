<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\AlertUserController;
use App\Http\Controllers\StoreDetailsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view("welcome");
});
Route::get("/store-details", [StoreDetailsController::class, 'storeDetails'])->name('storeDetails');
Route::post("/store-details", [StoreDetailsController::class, 'storeDetailsPost']);
Route::get("store-details/stored", [StoreDetailsController::class, 'stored'])->name('stored');
Route::get('generate-pdf', [StoreDetailsController::class, 'pdfview'])->name('generate-pdf');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Route::get('/notification/user', [AlertUserController::class, 'sentAlertData'])->name('notify')->middleware('auth'); */
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//home page
Route::get('/', [App\Http\Controllers\HomeController::class, "home"]);

//voyages national page
Route::get('/voyages-national', [App\Http\Controllers\VoyageNationalController::class, "listeVoyagesNational"]);

//voyages international
Route::get('/voyages-international', [App\Http\Controllers\VoyageInternationalController::class, "listeVoyagesInternational"]);

//Hajj_&_Omra
Route::get('/Hajj-Omra', [App\Http\Controllers\HajjEtOmraController::class, "HajjEtOmra"]);

//Promotions
Route::get('/promotions', [App\Http\Controllers\PromotionController::class, "listePromotions"]);

//About
Route::get('/qui-sommes-nous', [App\Http\Controllers\AboutController::class, "about"]);

//Contact
Route::get('/contact', [App\Http\Controllers\ContactController::class, "contact"]);

Route::get('/detail/{id}', [App\Http\Controllers\VoyageNationalController::class, "detailVoyageNational"])->name("voyages-national.detail");

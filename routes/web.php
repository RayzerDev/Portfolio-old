<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\PortfolioController;
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

Route::controller(PortfolioController::class) -> group(function (){
    Route::get('', 'index')->name('portfolio');
    Route::get('a-propos', 'about')->name('portfolio.about');
    Route::get('projets', 'projets')->name('portfolio.projects');
    Route::get('competences', 'skills')->name('portfolio.skills');
    Route::get('contact', 'contact')->name('portfolio.contact');
});

Route::post('/dark-mode', function () {
    session(['darkMode' => !session('darkMode', false)]);
    return redirect()->back();
})->name('darkMode.toggle');

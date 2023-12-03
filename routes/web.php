<?php

use Illuminate\Support\Facades\Route;
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
    Route::get('portfolio', 'index')->name('portfolio');
    Route::get('portfolio/a-propos', 'about')->name('portfolio.about');
    Route::get('portfolio/projets', 'projects')->name('portfolio.projects');
    Route::get('portfolio/competences', 'skills')->name('portfolio.skills');
    Route::get('portfolio/contact', 'contact')->name('portfolio.contact');
});

<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;





Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/portfolio', PortfolioController::class)->name('portfolio');


Route::view('/contact', 'contact')->name('contact');




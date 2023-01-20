<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\MessagesController;







Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');

// RUTAS DE PORFOLIO
// Route::get('/portfolio', [ProjectController::class, 'index'])->name('projects.index');
// Route::get('/portfolio/{id}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/portafolio', 'App\Http\Controllers\ProjectController@index') ->name('projects.index');
Route::get('/portafolio]/{id}', 'App\Http\Controllers\ProjectController@show') ->name('projects.show');


Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', [MessageController::class, 'store']) -> name ('messages.store');





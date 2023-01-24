<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\MessagesController;







Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');

// RUTAS DE PORFOLIO

Route::get('/portafolio', 'App\Http\Controllers\ProjectController@index' ) ->name('projects.index');
Route::get('/portafolio/crear', 'App\Http\Controllers\ProjectController@create') ->name('projects.create');

Route::get('/portafolio/{project}/editar', 'App\Http\Controllers\ProjectController@edit') ->name('projects.edit');
Route::patch('/portafolio/{project}', 'App\Http\Controllers\ProjectController@update') ->name('projects.update');

Route::post('/portafolio', 'App\Http\Controllers\ProjectController@store') ->name('projects.store');
Route::get('/portafolio/{project}', 'App\Http\Controllers\ProjectController@show') ->name('projects.show');

Route::delete('/portafolio/{project}', 'App\Http\Controllers\ProjectController@destroy') ->name('projects.destroy');




Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'App\Http\Controllers\MessageController@store') -> name ('messages.store');







<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\MessagesController;







Route::view('/', 'home')->name('home');
Route::view('/quien-soy', 'about')->name('about');

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




Auth::routes(['register' => true] );
Route::post('/register', 'Auth\RegisterController@register');

Route::get('register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');








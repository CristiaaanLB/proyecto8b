<?php

use Illuminate\Support\Facades\Route;

//Se pone el controlador en el archivo de rutas web.php
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MessagesController;

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

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
//Route::view('/portfolio', 'portfolio', compact('portfolio'))->name('portfolio');
//Route::get('/portfolio', PortfolioController::class)->name('portfolio');
Route::get('/portfolio', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/portfolio/crear', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/portfolio', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/portfolio/{id}', [ProjectController::class, 'show'])->name('projects.show');
Route::view('/contact', 'contact')->name('contact');
Route::post('contact', [MessagesController::class, 'store']);
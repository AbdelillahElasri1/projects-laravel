<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommenttController;

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



Route::get('/', [StaticController::class, 'index'])->name('home.index');
// Route::get('/contact', [StaticController::class, 'contact'])->name('home.contact');
Route::get('/discover', [StaticController::class, 'discover'])->name('discover');
Route::get('/playmusic', [StaticController::class, 'playmusic'])->name('playmusic');


Route::get('/commentaire', [StaticController::class, 'commentaire'])->name('admin.commentaire');
Route::get('/like', [StaticController::class, 'like'])->name('admin.like');


Route::resource('music', MusicController::class);
Route::resource('comment', CommenttController::class);


  
// Route::resource('admin', AdminController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

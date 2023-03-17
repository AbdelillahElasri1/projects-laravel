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

Route::get('/', function () {
    return view('welcome');
});

Route::group(array('namespace' => 'Backend'), function(){
    Route::get('/create', [App\Http\Controllers\Backend\MusicController::class, 'create']);
    Route::get('/edit', [App\Http\Controllers\Backend\MusicController::class, 'edit']);
    // Route::post('/edit', [App\Http\Controllers\Backend\MusicController::class, 'update']);
    Route::get('/index', [App\Http\Controllers\Backend\MusicController::class, 'index']);
    // Route::get()
     //Route::resource('/music', 'MusicController');
    Route::post('/create ',  [App\Http\Controllers\Backend\MusicController::class, 'store']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

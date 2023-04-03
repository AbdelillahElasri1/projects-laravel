<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Staticcontroller;
use App\Http\Controllers\ComputersControllers;

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


Route::get('/', [Staticcontroller::class, 'index'])->name('home.index');
Route::get('/about', [Staticcontroller::class, 'about'])->name('home.about');
Route::get('/contact', [Staticcontroller::class, 'contact'])->name('home.contact');

Route::resource('computers', ComputersControllers::class);



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/store/{category?}/{item?}', function($category = null, $item = null){
//     if (isset($category)) {
//         if (isset($item)) {
//             return "<h1>{$item}</h1>";
//         }
//         return "<h1>{$category}</h1>";
//     }
//     return 'Store';
    
// });

// Route::get('/store', function(){
//     $filter = request('store');
//     if ($filter) {
//         return '<h1>welcome to our store : <span style="color: red;">'.$filter.'</span></h1>';
//     } else {
//         return '<h1>welcome to our store : <span style="color: red;">All product</span></h1>';
//     }
// });

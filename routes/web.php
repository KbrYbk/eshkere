<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/where', function () { //где найти
//     return view('where');
// });

// Auth::routes();

Route::get('/studenty', [App\Http\Controllers\Studentys::class, 'stud']);
// Route::get('/trugames', [App\Http\Controllers\tovar::class, 'about']); //о нас
// Route::get('/catalog', [App\Http\Controllers\tovar::class, 'catalog']); //каталог


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

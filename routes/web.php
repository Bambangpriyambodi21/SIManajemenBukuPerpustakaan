<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Buku
Route::get('/index', [BookController::class, 'index']);
Route::get('/create', [BookController::class, 'create']);
Route::post('/store', [BookController::class, 'store']);
Route::get('/show/{id}', [BookController::class, 'show']);
Route::post('/update/{id}', [BookController::class, 'update']);
Route::get('/destroy/{id}', [BookController::class, 'destroy']);

//Pinjaman
Route::get('/borrow/index', [BorrowController::class, 'index']);
Route::get('/borrow/create', [BorrowController::class, 'create']);
Route::post('/borrow/store', [BorrowController::class, 'store']);
Route::get('/borrow/show/{id}', [BorrowController::class, 'show']);
Route::post('/borrow/update/{id}', [BorrowController::class, 'update']);
Route::get('/borrow/destroy/{id}', [BorrowController::class, 'destroy']);
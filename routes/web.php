<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::get('/dashboard', [UserController::class,'dashboard'])->name('dashboard');


Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/', [UserController::class, 'index']);

Route::post('/user', [UserController::class, 'store'])->name('user.store');

Route::put('/user', [UserController::class, 'update'])->name('user.update');

Route::delete('/user/{user_id}', [UserController::class, 'destroy']);

// Route::get('/', function () {
//     return view('welcome');
// });

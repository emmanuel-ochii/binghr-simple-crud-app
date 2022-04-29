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


Route::get('/', [UserController::class,'dashboard'])->name('dashboard');

// Route::resource('user', UserController::class);

// Route::get('/user', 'UserCrudController@view')->name('user.index');
// Route::get('/companies', 'UserCrudController@get_user_data')->name('data');
// Route::get('/addUser', 'UserCrudController@view')->name('user.view');
// Route::post('/addUser', 'UserCrudController@Store')->name('user.store');
// Route::get('/addUser/{id}/edit', 'UserCrudController@update')->name('user.update');
// Route::delete('/addUser/{id}', 'UserCrudController@destroy')->name('user.destroy');

Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::post('/user', [UserController::class, 'store'])->name('user.store');

Route::put('/user', [UserController::class, 'update'])->name('user.update');

Route::delete('/user/{user_id}', [UserController::class, 'destroy']);

// Route::get('/', function () {
//     return view('welcome');
// });

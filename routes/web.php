<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProfileController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/signup', [AuthController::class, 'getSignup'])->middleware('guest')->name('auth.signup');
Route::post('/postSignup', [AuthController::class, 'postSignup'])->middleware('guest')->name('post.auth.signup');

Route::get('/Signin', [AuthController::class, 'getSignin'])->middleware('guest')->name('auth.signin');
Route::post('/postSignin', [AuthController::class, 'postSignin'])->middleware('guest')->name('post.auth.signin');

Route::get('/Signout', [AuthController::class, 'Signout'])->name('auth.signout');

Route::get('/search', [SearchController::class, 'getResults'])->name('getResults');

Route::get('/profile/{username}', [ProfileController::class, 'getProfile'])->name('getProfile');

Route::get('/edit', [ProfileController::class, 'getEdit'])->middleware('auth')->name('getEdit');
Route::post('/postEdit', [ProfileController::class, 'postEdit'])->middleware('auth')->name('postEdit');

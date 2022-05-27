<?php

namespace App\Http\Controllers;
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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::group(['middleware' => 'login'], function(){
    Route::get('/', [ProductController::class, 'index']);

    Route::get('/product/insert', [ProductController::class, 'insertPage']);
    Route::post('/product/insert', [ProductController::class, 'insert']);

    Route::get('/product/update/{id}', [ProductController::class, 'updatePage']);
    Route::post('/product/update/{id}', [ProductController::class, 'update']);

    Route::get('/product/delete/{id}', [ProductController::class, 'delete']);

    Route::get('/favorite', [FavoriteController::class, 'index']);

    Route::get('/favorite/insert/{id}', [FavoriteController::class, 'favorite']);
    Route::get('/favorite/remove/{id}', [FavoriteController::class, 'unFavorite']);

    Route::get('/profile', [ProfileController::class, 'index']);

    Route::get('/logout', [UserController::class, 'logout']);
});


Route::get('/login', [UserController::class, 'loginPage']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/register', [UserController::class, 'registerPage']);
Route::post('/register', [UserController::class, 'register']);



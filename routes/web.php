<?php

use App\Http\Controllers\ItemModelController;
use App\Http\Controllers\FormController;
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

Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware('auth');


    Route::get('/register', [FormController::class, 'registration'])->name('register');
    Route::post('/register', [FormController::class, 'register']);
    Route::get('/login', [FormController::class, 'loginForm'])->name('login');
    Route::post('/login', [FormController::class, 'login']);
    Route::get('/verification/{user}/{token}', [FormController::class, 'verification']);
    Route::get('/logout', [FormController::class, 'logout']);

    Route::get('/', function () {
        return view('home');
    });

    Route::get('/items', [ItemModelController::class, 'index']);
    Route::post('/items', [ItemModelController::class, 'store']);
    Route::get('/items/create', [ItemModelController::class, 'create']);
    Route::get('/items/{items}/edit', [ItemModelController::class, 'edit']);
    Route::put('/items/{item}', [ItemModelController::class, 'update']);
    Route::delete('/items/{item}', [ItemModelController::class, 'destroy']);



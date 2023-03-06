<?php

use App\Http\Controllers\Auth\LoginUserController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\User\UserController;
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

//Route::get('/', [UserController::class, 'index'])->name('index');

Route::get('/registration', [RegistrationController::class, 'registrationForm'])->name('registrationform');

Route::get('/login', [LoginUserController::class, 'login'])->name('login');
Route::post('/loginpage', [LoginUserController::class, 'loginSuccess'])->name('loginsuccess');
Route::get('/logout', [LoginUserController::class, 'logout'])->name('logout');

Route::prefix('user')->name('user.')->group(function () {
    Route::post('/store', [UserController::class, 'storeData'])->name('store');
    Route::get('/index', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'createData'])->name('create');
    Route::get('/edit/{id}', [UserController::class, 'editUser'])->name('edit');
    Route::put('/update/{id}', [UserController::class, 'updateUser'])->name('update');
    Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->name('destroy');
});

Route::prefix('blog')->name('blog.')->group(function () {
    Route::post('/store', [BlogController::class, 'storeData'])->name('store');
    Route::get('/index', [BlogController::class, 'index'])->name('index');
    Route::get('/create', [BlogController::class, 'createData'])->name('create');
    Route::get('/edit/{id}', [BlogController::class, 'editUser'])->name('edit');
    Route::put('/update/{id}', [BlogController::class, 'updateUser'])->name('update');
    Route::delete('/destroy/{id}', [BlogController::class, 'destroy'])->name('destroy');
});

Route::prefix('category')->name('category.')->group(function () {
    Route::post('/store', [CategoryController::class, 'storeData'])->name('store');
    Route::get('/index', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'createData'])->name('create');
    Route::get('/edit/{id}', [CategoryController::class, 'editUser'])->name('edit');
    Route::put('/update/{id}', [CategoryController::class, 'updateUser'])->name('update');
    Route::delete('/destroy/{id}', [CategoryController::class, 'destroy'])->name('destroy');
});

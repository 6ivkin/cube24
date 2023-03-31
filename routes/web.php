<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CurseController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'loginPost'])->name('login.post');
Route::get('/registration', [\App\Http\Controllers\AuthController::class, 'registration'])->name('registration');
Route::post('/registration', [\App\Http\Controllers\AuthController::class, 'registrationPost'])->name('registration.post');
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
//Route::group(['middleware' => 'auth'], function () {
//    Route::get('/profile', function () {
//        return view('')
//    });
//});
Route::resource("/student", StudentController::class);
Route::resource("/curse", CurseController::class);
Route::resource("/user", UserController::class);

<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/course', function () {
    return view('course');
});

Route::get('/liatcourse', function () {
    return view('liatcourse');
});

// Route::get('/user', function () {
//     return view('user');
// });

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/user/{user}', [UserController::class, 'index']);
Route::get('/course/{user}', [CourseController::class, 'index']);
// Route::get('/home/{user}', [HomeController::class, 'index']);

Route::patch('/enroll_1/{user}', [CourseController::class, 'enroll_1']);
Route::patch('/enroll_2/{user}', [CourseController::class, 'enroll_2']);
Route::patch('/enroll_3/{user}', [CourseController::class, 'enroll_3']);
Route::patch('/enroll_4/{user}', [CourseController::class, 'enroll_4']);

<?php

use App\Http\Controllers\AnakController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\landingpageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'logincheck']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registercheck']);

/*Dashboard*/
Route::get('/dashboard', [Dashboardcontroller::class, 'index']);

/*login*/
Route::get('auth/login', [AuthController::class, 'index']);

Route::get('/login', [AuthController::class, 'index'])->name('login');

/*landingpage*/
<<<<<<< HEAD
Route::get('/landingpage', [landingpageController::class, 'index']);
=======
Route::get('/landingpage', [landingpageController::class, 'index']);

/*crud*/
route::get('/anak',[AnakController::class, 'index'])->name('anak');
>>>>>>> 9ec9f635b51eb64464e2d4e3ca8864a7e8ea6da2

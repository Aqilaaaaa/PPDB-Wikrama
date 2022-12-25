<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


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
    return view('index');
});

Route::get('/student', function () {
    return view('student');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/student/dashboard', function () {
    return view('student.student-dashboard');
});

Route::post('/student-register',[StudentController::class, 'student'])->name('studentRegister');

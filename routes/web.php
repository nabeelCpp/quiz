<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.login');
Route::get('/quiz', [HomeController::class, 'questions'])->name('home.quiz');
Route::get('/result', [HomeController::class, 'result'])->name('home.result');
Route::post('/user/auth', [HomeController::class, 'save_user'])->name('user.auth');
Route::post('/quiz/save', [HomeController::class, 'saveQuestionData'])->name('quiz.save');
Route::get('/quiz/logout', [HomeController::class, 'logout'])->name('quiz.logout');
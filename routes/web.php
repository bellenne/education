<?php

use App\Http\Controllers;
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
//
Route::get('/', [Controllers\HomeController::class,"index"])->name("home");
Route::get('/index', Controllers\IndexController::class)->name("index");
Route::get('/lessens/{academic_subject}', Controllers\Lessens\LessenManagerController::class)->name("lessens");

Route::get('/tasks/{lessen}', Controllers\Tasks\TaskManagerController::class)->name("tasks");
Route::get('/tasks/{lessen}/show', Controllers\Tasks\TaskShowController::class)->name("task.show");
Route::get('/finalytask/create', Controllers\Tasks\FinalyTaskCreateController::class)->name("finalytask.create");
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\Admin\LecturerController;
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
   return view('auth.login');
});


Route::get('lecturer/create', [LecturerController::class, 'create'])->name("create-lecturer");

Route::post('lecturer/store', [LecturerController::class, 'store'])->name("store-lecturer");

Route::get('lecturer/index', [LecturerController::class, 'index'])->name("index-lecturer");

Route::get('lecturer/edit/{id}', [LecturerController::class, 'edit'])->name("edit-lecturer");

Route::put('lecturer/update/{id}', [LecturerController::class, 'update'])->name("update-lecturer");

Route::delete('lecturer/delete/{id}', [LecturerController::class, 'delete'])->name("delete-lecturer");;




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

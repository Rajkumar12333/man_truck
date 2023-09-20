<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin-reg',[App\Http\Controllers\Register\RegisterController::class,'admin_register'])->name('admin-regs');
Route::get('news-list',[App\Http\Controllers\News\NewsController::class,'list'])->name('news-list');
Route::post('news-store', [App\Http\Controllers\News\NewsController::class, 'store'])->name('news-store');
Route::get('truck-list',[App\Http\Controllers\Truck\TruckController::class,'list'])->name('truck-list');
Route::post('truck-store', [App\Http\Controllers\Truck\TruckController::class, 'store'])->name('truck-store');
Route::get('truck-delete/{id}', [App\Http\Controllers\Truck\TruckController::class, 'destroy'])->name('truck-delete');
Route::post('truck-edit', [App\Http\Controllers\Truck\TruckController::class, 'edit'])->name('truck-edit');

Route::post('news-edit', [App\Http\Controllers\News\NewsController::class, 'edit'])->name('news-edit');
Route::get('news-delete/{id}', [App\Http\Controllers\News\NewsController::class, 'destroy'])->name('news-delete');
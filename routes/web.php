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
    return view('index');
});

Route::get('admin-reg',[App\Http\Controllers\Register\RegisterController::class,'admin_register'])->name('admin-regs');
<<<<<<< HEAD
=======
Route::get('news-list',[App\Http\Controllers\News\NewsController::class,'list'])->name('news-list');
Route::post('news-store', [App\Http\Controllers\News\NewsController::class, 'store'])->name('news-store');
Route::get('truck-list',[App\Http\Controllers\Truck\TruckController::class,'list'])->name('truck-list');
>>>>>>> 787fbe604d34c6fca9db985263f92e0b5e146257
Route::post('truck-store', [App\Http\Controllers\Truck\TruckController::class, 'store'])->name('truck-store');
Route::get('truck-delete/{id}', [App\Http\Controllers\Truck\TruckController::class, 'destroy'])->name('truck-delete');
Route::post('truck-edit', [App\Http\Controllers\Truck\TruckController::class, 'edit'])->name('truck-edit');

<<<<<<< HEAD
Route::get('truck-view',[App\Http\Controllers\Truck\TruckController::class,'truck_spec_view'])->name('truck-view');
Route::post('truck-spec-store', [App\Http\Controllers\Truck\TruckController::class, 'truck_spec_store'])->name('truck-spec-store');
=======
Route::post('news-edit', [App\Http\Controllers\News\NewsController::class, 'edit'])->name('news-edit');
Route::get('news-delete/{id}', [App\Http\Controllers\News\NewsController::class, 'destroy'])->name('news-delete');
>>>>>>> 787fbe604d34c6fca9db985263f92e0b5e146257

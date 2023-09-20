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
Route::post('truck-store', [App\Http\Controllers\Truck\TruckController::class, 'store'])->name('truck-store');
Route::get('truck-delete/{id}', [App\Http\Controllers\Truck\TruckController::class, 'destroy'])->name('truck-delete');
Route::post('truck-edit', [App\Http\Controllers\Truck\TruckController::class, 'edit'])->name('truck-edit');

Route::get('truck-view',[App\Http\Controllers\Truck\TruckController::class,'truck_spec_view'])->name('truck-view');
Route::post('truck-spec-store', [App\Http\Controllers\Truck\TruckController::class, 'truck_spec_store'])->name('truck-spec-store');
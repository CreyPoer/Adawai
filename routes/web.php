<?php

use App\Http\Controllers\DivisiController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GrafikController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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


Route::get('/',[EmployeeController::class,'home'])->name('home');

Route::group(['prefix' => 'grafik', 'as' => 'grafik.'], function () {
    Route::post('/get-data', [GrafikController::class, 'getData'])->name('get-data');
});

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/autentikasi',[LoginController::class,'autentikasi'])->name('autentikasi');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/admin',[UserController::class,'admin'])->name('admin');

    Route::get('/divisi',[DivisiController::class,'index'])->name('admin.divisi');
    Route::get('/tambah-divisi',[DivisiController::class,'create'])->name('tambah.divisi');
    Route::post('/simpan-divisi',[DivisiController::class,'store'])->name('simpan.divisi');
    Route::get('/edit-divisi/{id}',[DivisiController::class,'edit'])->name('edit.divisi');
    Route::put('/update-divisi/{id}',[DivisiController::class,'update'])->name('update.divisi');
    Route::delete('/delete-divisi',[DivisiController::class,'destroy'])->name('delete.divisi');

    Route::get('/employee',[EmployeeController::class,'index'])->name('admin.employee');
    Route::get('/tambah-employee',[EmployeeController::class,'create'])->name('tambah.employee');
    Route::post('/simpan-employee',[EmployeeController::class,'store'])->name('simpan.employee');
    Route::get('/edit-employee/{id}',[EmployeeController::class,'edit'])->name('edit.employee');
    Route::get('/detail-employee/{id}',[EmployeeController::class,'show'])->name('detail.employee');
    Route::put('/update-employee/{id}',[EmployeeController::class,'update'])->name('update.employee');
    Route::delete('/delete-employee',[EmployeeController::class,'destroy'])->name('delete.employee');

});

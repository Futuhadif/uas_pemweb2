<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\AdminController;


Route::get('/', [SantriController::class, 'index'])->name('index');
Route::get('/beranda', [SantriController::class, 'beranda'])->name('beranda');
Route::get('/list', [SantriController::class, 'listSantri'])->name('list');
Route::get('/list-cari', [SantriController::class, 'search'])->name('cari');

// Route::get('/beranda', [SantriController::class, 'beranda'])->name('create');
Route::get('/tambah_data', [SantriController::class, 'create'])->name('create');
Route::post('/submit', [SantriController::class, 'store'])->name('submit');

Route::post('/login-admin', [AdminController::class, 'login'])->name('login');
Route::get('/logout-admin', [AdminController::class, 'logout'])->name('logout');
Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [AdminController::class, 'update'])->name('update');
Route::get('/delete-santri/{id}', [AdminController::class, 'destroy'])->name('delete-santri');
Route::get('/santri/pdf', [AdminController::class, 'generatePDF'])->name('santri.pdf');




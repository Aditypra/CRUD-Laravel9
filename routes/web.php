<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;


route::get('/',[HomeController::class,'index']);

//CRUD Data Mahasiswa
route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('index');
route::get('/tambah', [MahasiswaController::class, 'create'])->name('create');
route::post('/insertdata', [MahasiswaController::class, 'store'])->name('store');
route::get('/tampildata/{id}', [MahasiswaController::class, 'show'])->name('show');
route::post('/update/{id}', [MahasiswaController::class, 'update'])->name('update');
route::get('/delete/{id}', [MahasiswaController::class, 'destroy'])->name('destroy');

//Export PDF
route::get('/exportpdf', [MahasiswaController::class, 'exportpdf'])->name('exportpdf');


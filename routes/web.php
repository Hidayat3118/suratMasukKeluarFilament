<?php
use App\Http\Controllers\SuratController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/surat/cetak/{id}', [SuratController::class, 'cetak'])->name('surat.cetak');

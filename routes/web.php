<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dokter;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Dokter::class, 'index']);
Route::get('/tambahdata', [Dokter::class, 'create']);
Route::post('/insertdata', [Dokter::class, 'insert']);
Route::get('/update/{id}', [Dokter::class, 'update']);
Route::post('/updatedata/{id}', [Dokter::class, 'updatedata']);

<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/', [MahasiswaController::class, 'index'])->name('home');
// Route::get('/home', [MahasiswaController::class, 'index']);
Route::get('/home/delete/{id}', [MahasiswaController::class, 'delete']);
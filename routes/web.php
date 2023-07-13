<?php

use App\Http\Controllers\aritmatika;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;


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
require __DIR__ . '/auth.php';

//dashboard and homnepage
Route::get('/', [DataController::class, 'dashdata'])->middleware(['auth', 'verified'])->name('dashboard');

//read
Route::get('/datasiswa', [DataController::class, 'data'])->middleware(['auth', 'verified'])->name('data');

//create
Route::get('/insert', [DataController::class, 'insert'])->middleware(['auth', 'verified'])->name('insert');
Route::post('/store', [DataController::class, 'store'])->middleware(['auth', 'verified'])->name('store');

//update
Route::get('/editsiswa/{student}', [DataController::class, 'edit'])->middleware(['auth', 'verified'])->name('editsiswa');
Route::patch('/update/{student}', [DataController::class, 'update'])->middleware(['auth', 'verified'])->name('update');

//delete
Route::delete('/deletesiswa/{student}', [DataController::class, 'destroy'])->middleware(['auth', 'verified'])->name('deletesiswa');

//export route
Route::get('/exportdata', [DataController::class, 'studentExport'])->middleware(['auth', 'verified'])->name('exportdata');

//import
Route::post('/importdata', [DataController::class, 'studentImport'])->middleware(['auth', 'verified'])->name('importdata');

Route::view('/about', 'about')->name('about');

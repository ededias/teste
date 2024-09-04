<?php

use App\Http\Controllers\TaskController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TaskController::class, 'index']);

Route::get('/create', [TaskController::class, 'create'])->name('create');
Route::post('/save', [TaskController::class, 'save'])->name('save');

Route::get('/update', [TaskController::class, 'get'])->name('get');



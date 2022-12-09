<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BanghayController;

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

Route::get('/', [BanghayController::class, 'welcome']);
Route::get('/banghay', [BanghayController::class, 'index'])->middleware('auth');
Route::post('/uploadfile', [BanghayController::class, 'store'])->middleware('auth');
Route::get('/download/{file}', [BanghayController::class, 'download']);
Route::get('/preview/{id}', [BanghayController::class, 'preview']);

Route::get('/banghay/gradeone', [BanghayController::class, 'gradeone'])->middleware('auth');
Route::get('/banghay/gradetwo', [BanghayController::class, 'gradetwo'])->middleware('auth');
Route::get('/banghay/gradethree', [BanghayController::class, 'gradethree'])->middleware('auth');
Route::get('/banghay/gradefour', [BanghayController::class, 'gradefour'])->middleware('auth');
Route::get('/banghay/gradefive', [BanghayController::class, 'gradefive'])->middleware('auth');
Route::get('/banghay/gradesix', [BanghayController::class, 'gradesix'])->middleware('auth');


Auth::routes();




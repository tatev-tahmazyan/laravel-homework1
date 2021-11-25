<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidationController;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/homework/list', function () {
    return view('list',['fruits' => ['pear','peach','banana','apple','orange']]);
})->name('homework1-list');

Route::get('/homework/validation', [ValidationController::class,'showform'])->name('homework1-validation');
Route::post('/homework/validation', [ValidationController::class,'validateform']);



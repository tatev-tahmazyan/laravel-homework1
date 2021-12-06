<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidationController;
use App\Http\Controllers\TestMysqlController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\OneToManyController;
use App\Http\Controllers\ImageUploadController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/homework/list', function () {
    return view('list',['fruits' => ['pear','peach','banana','apple','orange']]);
})->name('homework1-list');

Route::get('/homework/validation', [ValidationController::class,'showform'])->name('homework1-validation');
Route::post('/homework/validation', [ValidationController::class,'validateform']);

Route::get('/testsql', [TestMysqlController::class,'index']);

Route::get('/homework/car', [CarController::class,'index'])->name('homework2-car');

//one to many
Route::get('/homework/company/{id}', [OneToManyController::class,'company'])->name('homework3-company');

Route::get('/homework/users/{id}', [OneToManyController::class,'users'])->name('homework3-users');


//image upload
Route::get('/homework/upload_image', [ImageUploadController::class, 'createForm'])->name('homework4-imageUpload');

Route::post('/homework/upload-image', [ImageUploadController::class, 'imageUpload'])->name('imageUpload');

Route::get('/homework/see-images', [ImageUploadController::class, 'imageName'])->name('homework4-images');

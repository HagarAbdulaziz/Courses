<?php

use App\Http\Controllers\Admin\CoursesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/',[HomeController::class,"home"]);
Route::get('/redirects',[HomeController::class,"index"]);
////////////////////admin/////////////////////////////////////
Route::group(['middleware'=>'auth:sanctum'],function(){

Route::group(['prefix' => 'courses'], function () {
    Route::get('/', [CoursesController::class,'index']);
    Route::get('create', [CoursesController::class,'create'])->name('admin.courses.create');
  Route::post('store',[CoursesController::class,'store'])->name('admin.courses.store');
    Route::get('edit/{id}', [CoursesController::class,'edit'])->name('admin.courses.edit');
    Route::post('update/{id}', [CoursesController::class,'update'])->name('admin.courses.update');
    Route::get('delete/{id}', [CoursesController::class,'delete'])->name('admin.courses.delete');
});
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

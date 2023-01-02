<?php

use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\PartenersController;
use App\Http\Controllers\Admin\ServicesController;
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
Route::get('/redirects',[HomeController::class,"index"])->name('admin.dashboard');
////////////////////admin/////////////////////////////////////
Route::group(['middleware'=>'auth:sanctum'],function(){

Route::group(['prefix' => 'course'], function () {
    Route::get('/', [CoursesController::class,'index'])->name('admin.courses');
    Route::get('create', [CoursesController::class,'create'])->name('admin.courses.create');
  Route::post('store',[CoursesController::class,'store'])->name('admin.courses.store');
    Route::get('edit/{id}', [CoursesController::class,'edit'])->name('admin.courses.edit');
    Route::post('update/{id}', [CoursesController::class,'update'])->name('admin.courses.update');
    Route::get('delete/{id}', [CoursesController::class,'delete'])->name('admin.courses.delete');
});
Route::group(['prefix' =>'partners'], function(){
    Route::get('/', [PartenersController::class,'index'])->name('admin.partners.index');
    Route::get('create', [PartenersController::class,'create'])->name('admin.partners.create');
    Route::post('store',[PartenersController::class,'store'])->name('admin.partners.store');
    Route::get('delete/{id}', [PartenersController::class,'delete'])->name('admin.partners.delete');
});
Route::group(['prefix' => 'services'], function () {
    Route::get('/', [ServicesController::class,'index'])->name('admin.services');
    Route::get('create', [ServicesController::class,'create'])->name('admin.services.create');
  Route::post('store',[ServicesController::class,'store'])->name('admin.services.store');
    Route::get('edit/{id}', [ServicesController::class,'edit'])->name('admin.services.edit');
    Route::post('update/{id}', [ServicesController::class,'update'])->name('admin.services.update');
    Route::get('delete/{id}', [ServicesController::class,'delete'])->name('admin.services.delete');
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

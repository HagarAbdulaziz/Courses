<?php

use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\OurClientController;
use App\Models\Message;

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

Route::get('/chatuser',[ChatController::class,"chatuser"])->name('chatuser')->middleware('auth');

Route::get('/patientchatnow/{id}', [ChatController::class ,'patientchatnow'])->middleware('AdminMiddeware');

Route::get('/deletmsg/{id}', [ChatController::class ,'patientdeletmsg'])->middleware('AdminMiddeware');

Route::get('/deletchat/{id}', [ChatController::class ,'deletchat'])->middleware('AdminMiddeware');


Route::get('/deletchats/', [ChatController::class ,'deletchats'])->middleware('auth');

Route::get('/deletmsgs/{id}', [ChatController::class ,'deletmsgs'])->middleware('auth');

Route::get('/patientsearch', [ChatController::class ,'patientsearch'])->middleware('AdminMiddeware');

Route::get('patientdelete_chat/{id}', function ($id) {
    Message::whereIn('user_id', [$id, auth()->user()->id])
    ->whereIn('reciever_id', [$id, auth()->user()->id])->delete();
    return redirect()->back();
})->middleware('AdminMiddeware');







Route::get('/chatnow/{id}', [ChatController::class ,'chatnow'])->middleware('auth');

Route::get('/contact',[ChatController::class,"contact"])->name('Contact');
Route::post('/contact/go',[ChatController::class,'contactstore'])->name('contactstore');
////////////////////admin/////////////////////////////////////
Route::group(['middleware'=>'AdminMiddeware'],function(){
Route::group(['prefix' => 'course'], function () {
    Route::get('/', [CoursesController::class,'index']);
    Route::get('create', [CoursesController::class,'create'])->name('admin.courses.create');
  Route::post('store',[CoursesController::class,'store'])->name('admin.courses.store');
    Route::get('edit/{id}', [CoursesController::class,'edit'])->name('admin.courses.edit');
    Route::post('update/{id}', [CoursesController::class,'update'])->name('admin.courses.update');
    Route::get('delete/{id}', [CoursesController::class,'delete'])->name('admin.courses.delete');
});
    Route::group(['prefix' => 'clients'], function () {
        Route::resource('clients','\App\Http\Controllers\Admin\OurClientController');
        Route::get('deleteimage/{id}', [OurClientController::class, 'deleteimage'])->name('clients.delete');
    });
    Route::group(['prefix' => 'chat'], function () {
        Route::resource('chat','\App\Http\Controllers\ChatController');

        Route::get('deleteimage/{id}', [OurClientController::class, 'deleteimage'])->name('clients.delete');
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

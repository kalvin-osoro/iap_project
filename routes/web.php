<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StudentController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [QuoteController::class, 'index']);
Route::get('/home/show', [QuoteController::class, 'show'])->name('quotes.show');

Route::get('/home/list', [App\Http\Controllers\EventController::class, 'list'])->name('events.list');

Auth::routes(['verify'=>true]);

Route::get('/profilePicture', [App\Http\Controllers\ProfileController::class, 'getProfileAvatar'])->name('profileAvatar');
Route::post('/profilePicture', [App\Http\Controllers\ProfileController::class, 'profilePictureUpload'])->name('profileAvatar');
Route::get('/changePassword', [App\Http\Controllers\ProfileController::class, 'changePasswordForm'])->name('changePassword');
Route::post('/changePassword', [App\Http\Controllers\ProfileController::class, 'changePassword'])->name('changePassword');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');
Route::post('/profileUpdate', [App\Http\Controllers\ProfileController::class, 'profileUpdate'])->name('profileUpdate');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/student',[StudentController::class,'index']);
Route::get('/student/edit/{id}',[StudentController::class,'edit']);
Route::get('/student/show/{id}',[StudentController::class,'show']);
Route::get('/student/create',[StudentController::class,'create']);
Route::post('/student/store',[StudentController::class,'store']);
Route::POST('/student/update/{id}',[StudentController::class,'update']);
Route::POST('/student/destroy/{id}',[StudentController::class,'destroy']);



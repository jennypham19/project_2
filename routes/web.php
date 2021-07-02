<?php


use App\Http\Controllers\MajorController;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Middleware\CheckLogin;
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
Route::get('/login',[AuthenticateController::class,'login'])->name('login');
Route::post('/login-process',[AuthenticateController::class,'loginProcess'])->name('loginProcess');
Route::get('/logout',[AuthenticateController::class,'logout'])->name('logout');

Route::middleware([CheckLogin::class])->group(function(){
    Route::get('/dashboard',function(){
         return view('dashboard');
    })->name('dashboard');
    Route::resource('major',MajorController::class);
    Route::resource('course',CourseController::class);
    Route::resource('semester',SemesterController::class);
    Route::resource('subject',SubjectController::class);
    Route::resource('grade',GradeController::class);
    Route::resource('student',StudentController::class);
    Route::resource('mark',MarkController::class);
});
Route::get('/calender',function(){
    return view('calender');
})->name('calender');

<?php


use App\Http\Controllers\MajorController;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MarkController;
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

Route::get('/dashboard',function(){
    return view('home.dashboard');
})->name('dashboard');

// Route::get('/calender',function(){
//     return view('calendar.calender');
// })->name('calender');

Route::resource('major',MajorController::class);
Route::resource('course',CourseController::class);
Route::resource('semester',SemesterController::class);
Route::resource('subject',SubjectController::class);
Route::resource('grade',GradeController::class);
Route::resource('student',StudentController::class);
Route::resource('mark',MarkController::class);



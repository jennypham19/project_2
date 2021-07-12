<?php


use App\Http\Middleware\CheckLogin;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\MajorStudentController;

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
    Route::get('/dashboard-admin',function(){
         return view('dashboard');
    })->name('dashboard-admin');
    Route::resource('major',MajorController::class);
    Route::resource('course',CourseController::class);
    Route::resource('semester',SemesterController::class);
    Route::resource('subject',SubjectController::class);
    Route::resource('grade',GradeController::class);
    Route::resource('student',StudentController::class);
    Route::resource('mark',MarkController::class);
    
});
Route::get('/calendar',[CalendarController::class,'index'])->name('calendar');
Route::get('/dashboard-user',[UserController::class,'index'])->name('dashboard-user');
Route::get('/major-student',[UserController::class,'indexMajor'])->name('major-student');
Route::get('/course-student',[UserController::class,'indexCourse'])->name('course-student');
Route::get('/semester-student',[UserController::class,'indexSemester'])->name('semester-student');
Route::get('/subject-student',[UserController::class,'indexSubject'])->name('subject-student');
Route::get('/grade-student',[UserController::class,'indexGrade'])->name('grade-student');
Route::get('/mark-student',[UserController::class,'indexMark'])->name('mark-student');
Route::get('/calendar-student',[UserController::class,'indexCalendar'])->name('calendar-student');
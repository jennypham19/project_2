<?php


use App\Http\Middleware\CheckLogin;

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckLoginUser;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\MarkResitController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\AuthenticateController;

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

//admin
Route::get('/admin/login', [AuthenticateController::class, 'loginAdmin'])->name('login-admin');
Route::post('/login-process-admin', [AuthenticateController::class, 'loginProcessAdmin'])->name('loginProcessAdmin');
Route::get('/admin/logout', [AuthenticateController::class, 'logoutAdmin'])->name('logout-admin');

//tạo middleware để  check xem ng dùng có đăng nhập hay không.Nếu có thì cho vào, không thì mời đăng nhập
Route::middleware([CheckLogin::class])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboard');
    })->name('dashboard-admin');
    Route::resource('major', MajorController::class);
    Route::prefix('major')->name('major.')->group(function(){
        Route::get('hide/{id}',[MajorController::class,'hide'])->name('hide');
    });
    Route::resource('course', CourseController::class);
    Route::resource('semester', SemesterController::class);
    Route::resource('subject', SubjectController::class);
    Route::resource('grade', GradeController::class);
    Route::resource('student', StudentController::class);
    Route::get('statistic/list-student',[StatisticController::class,'indexStudent'])->name('list-student-pass');
    Route::resource('mark', MarkController::class);
    Route::resource('mark-resit',MarkResitController::class);
    Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');
    Route::post('/export-csv',[StudentController::class,'export_csv']);
});

 //user
Route::get('/user/login', [AuthenticateController::class, 'loginUser'])->name('login-student');
Route::post('/user/login-process', [AuthenticateController::class, 'loginProcessUser'])->name('loginProcessStudent');
Route::get('/user/logout', [AuthenticateController::class, 'logoutUser'])->name('logout-student');

Route::middleware([CheckLoginUser::class])->group(function(){
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('dashboard-student');
    Route::get('/user/major', [UserController::class, 'indexMajor'])->name('major-student');
    Route::get('/user/course', [UserController::class, 'indexCourse'])->name('course-student');
    Route::get('/user/semester', [UserController::class, 'indexSemester'])->name('semester-student');
    Route::get('/user/subject', [UserController::class, 'indexSubject'])->name('subject-student');
    Route::get('/user/grade', [UserController::class, 'indexGrade'])->name('grade-student');
    Route::get('/user/mark', [UserController::class, 'indexMark'])->name('mark-student');
    Route::get('/user/calendar', [UserController::class, 'indexCalendar'])->name('calendar-student');
});



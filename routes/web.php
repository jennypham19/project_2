<?php


use App\Http\Middleware\CheckLogin;

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckLoginUser;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\MarkResitController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\AverageMarkController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\UserAuthenticateController;

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
    //dashboard
    Route::get('/admin/dashboard', function () {
        return view('dashboard');
    })->name('dashboard-admin');
    //major
    Route::resource('major', MajorController::class);
    //course
    Route::resource('course', CourseController::class);
    //semester
    Route::resource('semester', SemesterController::class);
    //subject
    Route::resource('subject', SubjectController::class);
    //grade
    Route::resource('grade', GradeController::class);
    //student
    Route::resource('student', StudentController::class);
    //admin
    Route::resource('admin',AdminController::class);
    //profile
    Route::get('/profile',[ProfileController::class,'index'])->name('profile');
    Route::get('/profile/edit-profile/{id}',[ProfileController::class,'editProfile'])->name('edit-profile');
    Route::put('/profile/edit-profile-process/{id}',[ProfileController::class,'editProfileProcess'])->name('edit-profile-process');
    //change-password
    Route::get('/profile/change-password',[ProfileController::class,'changePassword'])->name('change-password');
    Route::post('/profile/change-password-process/{id}',[ProfileController::class,'changePasswordProcess'])->name('change-password-process');

    Route::get('statistic/list-mark',[StatisticController::class,'indexStudent'])->name('list-mark');
    Route::post('statistic/export-student-mark',[StatisticController::class, 'export'])->name('export-student-mark');
    //mark
    Route::resource('mark', MarkController::class);
    //mark-resit
    Route::resource('mark-resit',MarkResitController::class);
    //mark-average
    Route::resource('mark-average',AverageMarkController::class);
    Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');
    Route::post('/export-csv',[StudentController::class,'export_csv']);
    Route::post('/import-csv',[StudentController::class,'import_csv'])->name('student-import');
});

 //user
Route::get('/user/login', [UserAuthenticateController::class, 'loginUser'])->name('login-student');
Route::post('/user/login-process', [UserAuthenticateController::class, 'loginProcessUser'])->name('loginProcessStudent');
Route::get('/user/logout', [UserAuthenticateController::class, 'logoutUser'])->name('logout-student');

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



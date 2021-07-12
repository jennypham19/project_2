<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Semester;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user.dashboard-user');
    }

    public function indexMajor()
    {
        $listMajor = Major::get();
        return view('user.list-major',[
            'listMajor'=>$listMajor,
        ]);
    }

    public function indexCourse()
    {
        $listCourse = Course::get();
        return view('user.list-course',[
            'listCourse'=>$listCourse,
        ]);
    }

    public function indexSemester()
    {
        $listSemester = Semester::get();
        return view('user.list-semester',[
            'listSemester'=>$listSemester,
        ]);
    }

    public function indexSubject()
    {
        $listSemester= Semester::all();
        $listSubject = Subject::join("semester","subject.semesterCode","=","semester.semesterCode")
                       ->get();
        return view('user.list-subject',[
            'listSubject'=>$listSubject,
            'listSemester' =>$listSemester,
        ]);
    }

    public function indexGrade()
    {
        return view('user.list-grade');
    }

    public function indexMark()
    {
        return view('user.list-mark');
    }

    public function indexCalendar()
    {
        return view('user.calendar-user');
    }
}

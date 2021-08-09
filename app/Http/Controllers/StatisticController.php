<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function indexStudent()
    {
        $mark_final = Mark::where('mark_final')->get('mark_final');
        $mark_skill = Mark::where('mark_skill')->get('mark_skill');
        echo($mark_final);
        if ($mark_final >= 5 && $mark_skill >= 5) {
            $listStudent = Student::join("grade", "student.numberClass", "=", "grade.numberClass")
                ->join("course", "grade.numberCourse", "=", "course.numberCourse")
                ->get();
            $listSubject = Subject::all();
            return view('statistic.list-student', [
                'listStudent' => $listStudent,
                'listSubject' => $listSubject,
            ]);
        }
        
    }
}

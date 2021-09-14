<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
use App\Exports\Statistic;
use Illuminate\Http\Request;
use App\Exports\StatistiMultiple;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Redirect;

class StatisticController extends Controller
{
    public function indexStudent(Request $request)
    {
        $grade = $request->get('grade');
        $listGrade = Grade::join("course", "grade.courseCode", "=", "course.courseCode")
            ->get();
        $listSubject = Subject::all();
        switch ($grade) {
            case 'All':
            case '':
                $listMark = Student::join("grade", "student.classCode", "=", "grade.classCode")
                    // ->where("grade.classCode", "DESC")
                    ->get();
                $j = 0;
                $count = 0;
                $TBT = 0;
                $array = [];
                foreach ($listMark as $value) {
                    $idStudent = $value->studentCode;
                    $mark = Mark::join("subject", "mark.subjectCode", "=", "subject.subjectCode")
                        ->where("studentCode", "=", $idStudent)
                        ->get();
                    $count =  Mark::join("subject", "mark.subjectCode", "=", "subject.subjectCode")
                        ->where("studentCode", "=", $idStudent)
                        ->count();
                    $TB = 0;
                    $k = 0;
                    foreach ($mark as $val1) {
                        $list1 = [
                            'TT' => $val1->TB,
                        ];
                        $score1[$k++] = $list1;
                    }
                    foreach ($mark as $val) {
                        $TB = $TB + $val->TB;
                    }
                    if ($count == 0) {
                        $count = 1;
                    }
                    $TBT = round($TB / $count, 1);
                    $list = [
                        'id' => $value->studentCode,
                        'idGrade' => $value->classCode,
                        'class' => $value->FullGrade,
                        'Student' => $value->FullName,
                        'TBM' => $score1,
                        'TBT' => $TBT,
                    ];
                    $array[$j++] = $list;
                }
                break;
            default:
                $listMark = Student::join("grade", "student.classCode", "=", "grade.classCode")
                    ->where("grade.classCode", $grade)
                    ->get();
                $j = 0;
                $count = 0;
                $TBT = 0;
                $array = [];
                foreach ($listMark as $value) {
                    $idStudent = $value->studentCode;
                    $mark = Mark::join("subject", "mark.subjectCode", "=", "subject.subjectCode")
                        ->where("studentCode", "=", $idStudent)
                        ->get();
                    $count =  Mark::join("subject", "mark.subjectCode", "=", "subject.subjectCode")
                        ->where("studentCode", "=", $idStudent)
                        ->count();
                    $TB = 0;
                    $k = 0;
                    foreach ($mark as $val1) {
                        $list1 = [
                            'TT' => $val1->TB,
                        ];
                        $score1[$k++] = $list1;
                    }
                    foreach ($mark as $val) {
                        $TB = $TB + $val->TB;
                    }
                    if ($count == 0) {
                        $count = 1;
                    }
                    $TBT = round($TB / $count, 1);
                    $list = [
                        'id' => $value->studentCode,
                        'idGrade' => $value->classCode,
                        'class' => $value->FullGrade,
                        'Student' => $value->FullName,
                        'TBM' => $score1,
                        'TBT' => $TBT,
                    ];
                    $array[$j++] = $list;
                }
                break;
        }

        return view('statistic.list-mark-grade', [
            'listSubject' => $listSubject,
            'listGrade' => $listGrade,
            'listMark' => $array,
            'grade' => $grade,
        ]);
    }

    public function export(Request $request)
    {
       $request->validate([
           'grade' => 'required'
       ]);

       $grades = $request->grade;
    
       $export = new StatistiMultiple($grades);
       $fileName = "statistic_mark_grade_" . time() . ".xlsx"; 
       
       return $export->download($fileName);
    }
}

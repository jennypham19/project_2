<?php

namespace App\Exports;

use App\Models\ExcelStudent;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExcelExportsStudent implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ExcelStudent::select('studentCode','email','firstName','middleName','lastName','dateOfBirth','genDer','phone','address')->get();

    }
    public function headings() :array {
    	return ["Mã sinh viên", "Email", "Tên", "Tên đệm","Họ","Ngày sinh","Giới tính","Số điện thoại","Địa Chỉ"];
    }
}

// use App\Models\Grade;
// use App\Models\Student;
// use Illuminate\Contracts\View\View;
// use Maatwebsite\Excel\Concerns\FromView;

// class ExcelExportsStudent implements FromView 
// {
//     public function view():View 
//     {
//          $listGrade = Grade::join("course", "grade.courseCode", "=", "course.courseCode")
//         ->get();
//         $listStudent = Student::join("grade", "student.classCode", "=", "grade.classCode")
//                 ->join("course", "grade.courseCode", "=", "course.courseCode")
//                 ->orderBy('grade.classCode','DESC')
//                 ->get(); 
//         $filter = $_POST('filter');
//         return view('student.listStudent', [
//             'listStudent' => $listStudent,
//             'listGrade' => $listGrade,
//             'filter' => $filter,
//         ]);
//     }
// }
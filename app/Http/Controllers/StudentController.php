<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $grade = $request->get('grade');
        $listGrade = Grade::join("course", "grade.courseCode", "=", "course.courseCode")
        ->get();
        $listStudent = Student::join("grade", "student.classCode", "=", "grade.classCode")
            ->join("course", "grade.courseCode", "=", "course.courseCode")
            ->where("student.classCode",$grade)
            ->get();

        return view('student.listStudent', [
            'listStudent' => $listStudent,
            'listGrade' => $listGrade,
            'grade' => $grade,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grade = Grade::join("course", "grade.courseCode", "=", "course.courseCode")
            ->get();
        return view('student.createStudent', [
            'grade' => $grade,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $submit = $request->get('btn btn-submit');
        $studentCode = $request->get('code-student');
        $email = $request->get('email');
        $password = $request->get('password');
        $fistName = $request->get('first-name');
        $middleName = $request->get('middle-name');
        $lastName = $request->get('last-name');
        $dob = $request->get('dob');
        $gender = $request->get('gender');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $dateEnrollment = $request->get('date');
        $grade = $request->get('grade');

        $student = new Student();

        $student->studentCode = $studentCode;
        $student->email = $email;
        $student->passWord = $password;
        $student->firstName = $fistName;
        $student->middleName = $middleName;
        $student->lastName = $lastName;
        $student->dateOfBirth = $dob;
        $student->genDer = $gender;
        $student->phone = $phone;
        $student->address = $address;
        $student->dateEnrollment = $dateEnrollment;
        $student->classCode = $grade;

        $student->save();
        return Redirect::route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grade = Grade::join("course", "grade.courseCode", "=", "course.courseCode")
            ->get();
        $student = Student::join("grade", "student.classCode", "=", "grade.classCode")
            ->join("course", "grade.courseCode", "=", "course.courseCode")
            ->find($id);
        return view('student.editStudent', [
            "student" => $student,
            "grade" => $grade,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $studentCode = $request->get('code-student');
        $email = $request->get('email');
        $password = $request->get('password');
        $firstName = $request->get('first-name');
        $middleName = $request->get('middle-name');
        $lastName = $request->get('last-name');
        $dateOfBirth = $request->get('dob');
        $gender = $request->get('gender');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $dateEnrollment = $request->get('dateEnrolled');
        $classCode = $request->get('class');
        $student = Student::find($id);
        $student-> studentCode = $studentCode;
        $student->email = $email;
        $student->passWord = $password;
        $student->firstName = $firstName;
        $student->middleName = $middleName;
        $student->lastName = $lastName;
        $student->dateOfBirth = $dateOfBirth;
        $student->genDer = $gender;
        $student->phone = $phone;
        $student->address = $address;
        $student->dateEnrollment = $dateEnrollment;
        $student->classCode = $classCode;
        $student->save();
        return Redirect::route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::where('studentCode',$id)->delete();
        return Redirect::route('student.index');
    }
    public function showStudentResit(){
        return view('student.listStudentResit');
    }
}

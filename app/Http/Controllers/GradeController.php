<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Major;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCourse = Course::all();
        $listMajor = Major::all();
        $listGrade = Grade::join("course", "grade.numberCourse", "=", "course.numberCourse")
            ->join("major", "grade.numberMajor", "=", "major.numberMajor")
            ->get();
        return view('grade.listGrade', [
            'listGrade' => $listGrade,
            'listCourse' => $listCourse,
            'listMajor' => $listMajor,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listCourse = Course::all();
        $listMajor = Major::all();
        return view('grade.createGrade', [
            'listCourse' => $listCourse,
            'listMajor' => $listMajor,
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
        $gradeCode = $request->get('code-grade');
        $nameGrade = $request->get('name-grade');
        $courseCode = $request->get('id-course');
        $majorCode = $request->get('id-major');
        $grade = new Grade();
        $grade-> classCode = $gradeCode;
        $grade->nameClass = $nameGrade;
        $grade->numberCourse = $courseCode;
        $grade->numberMajor = $majorCode;
        $grade->save();
        return Redirect::route('grade.index');
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
        $course = Course::all();
        $major = Major::all();
        $grade = Grade::join("course", "grade.numberCourse", "=", "course.numberCourse")
            ->join("major", "grade.numberMajor", "=", "major.numberMajor")
            ->find($id);
        return view('grade.editGrade', [
            "grade" => $grade,
            "course" => $course,
            "major" => $major,
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
        $gradeCode = $request->get('code-grade');
        $nameGrade = $request->get('name-grade');
        $course = $request->get('course');
        $major = $request->get('major');
        $grade = Grade::find($id);
        $grade->classCode = $gradeCode;
        $grade->nameClass = $nameGrade;
        $grade->numberCourse = $course;
        $grade->numberMajor = $major;
        $grade->save();
        return Redirect::route('grade.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

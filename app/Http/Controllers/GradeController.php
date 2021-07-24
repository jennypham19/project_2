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
        $listGrade = Grade::join("course","grade.courseCode","=","course.courseCode")
                    ->join("major","grade.majorCode","=","major.majorCode")
                    ->get();
        return view('grade.listGrade',[
            'listGrade'=> $listGrade,
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
        return view('grade.createGrade',[
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
        $nameGrade = $request->get('name-grade');
        $courseCode = $request->get('id-course');
        $majorCode = $request->get('id-major');
        $grade = new Grade();
        $grade -> nameClass = $nameGrade;
        $grade -> courseCode = $courseCode;
        $grade -> majorCode = $majorCode;
        $grade ->save();
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
        $major = Major::all();
        $course = Course::all();
        $grade = Grade::find($id);
        return view('grade.editGrade',[
            'grade' => $grade,
            'major' =>$major,
            'course' => $course,
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
        $nameClass = $request->get('name-class');
        $nameCourse = $request->get('id-course');
        $nameMajor = $request->get('name-major');

        $grade = Grade::find($id);
        $grade->nameClass = $nameClass;
        $grade->courseCode = $nameCourse;
        $grade->majorCode = $nameMajor;

        $grade->save();
        return redirect()->route('grade.index');
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
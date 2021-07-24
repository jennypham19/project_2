<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listMark = Mark::join("student","student.studentCode","=","mark.studentCode")
                        -> join("subject","subject.subjectCode","=","mark.subjectCode")
                        ->get();
        return view('mark.listMark',[
            'listMark'=>$listMark,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listStudent = Student::all();
        $listSubject = Subject::all();
        return view('mark.createMark',[
            'listStudent' => $listStudent,
            'listSubject' => $listSubject,
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
        $nameStudent = $request->get('student');
        $nameSubject = $request->get('subject');
        $final1st = $request->get('final-1st');
        $final2nd = $request->get('final-2nd');
        $skill1st = $request->get('skill-1st');
        $skill2nd = $request->get('skill-2nd');
        $mark = new Mark();
        $mark->studentCode = $nameStudent;
        $mark->subjectCode = $nameSubject;
        $mark->final1st = $final1st;
        $mark->final2nd = $final2nd;
        $mark->skill1st = $skill1st;
        $mark->skill2nd = $skill2nd;
        $mark->save();
        return Redirect::route('mark.index');
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
        $mark = Mark::find($id);
        return view('mark.editMark',[
            'mark' => $mark
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
        //
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

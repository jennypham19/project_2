<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\MarkResit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MarkResitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listMark = MarkResit::join("student", "student.numberStudent", "=", "mark_resit.numberStudent")
            ->join("subject", "subject.numberSubject", "=", "mark_resit.numberSubject")
            ->get();
        return view('mark.listMark-resit',[
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
        return view('mark.createMark', [
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
        $mark1 = $request->get('mark_resit_final');
        $mark2 = $request->get('mark_resit_skill');
        $mark = new MarkResit();
        $mark->numberStudent = $nameStudent;
        $mark->numberSubject = $nameSubject;
        $mark->mark_resit_final = $mark1;
        $mark->mark_resit_skill = $mark2;
        $mark->save();
        return Redirect::route('mark-resit.index');
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
        //
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
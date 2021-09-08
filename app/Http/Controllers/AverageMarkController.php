<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use App\Models\Student;
use App\Models\Subject;
use App\Models\MarkResit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AverageMarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listMark = Mark::join("student", "student.studentCode", "=", "mark.studentCode")
            ->join("subject", "subject.subjectCode", "=", "mark.subjectCode")
            ->get();
        $listMarkResit = MarkResit::join("student", "student.studentCode", "=", "mark_resit.studentCode")
            ->join("subject", "subject.subjectCode", "=", "mark_resit.subjectCode")
            ->get();
        $listSubject = DB::table('subject')->select('nameSubject')->get();
        return view('average-mark.list-average-mark', [
            'listSubject' => $listSubject,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listSubject = Subject::all();
        $listStudent = Student::all();
        return view('average-mark.create-average-mark', [
            'listSubject' => $listSubject,
            'listStudent' => $listStudent,
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
        //
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

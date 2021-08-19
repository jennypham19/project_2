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
        $listMark = Mark::join("student", "student.studentCode", "=", "mark.studentCode")
            ->join("subject", "subject.subjectCode", "=", "mark.subjectCode")
            ->get();
        return view('mark.listMark', [
            'listMark' => $listMark,
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
        $mark_final = $request->get('mark_final');
        $mark_skill = $request->get('mark_skill');
        $note = $request->get('note');
        $mark = new Mark();
        $mark->studentCode = $nameStudent;
        $mark->subjectCode = $nameSubject;
        $mark->mark_final = $mark_final;
        $mark->mark_skill = $mark_skill;
        $mark->note = $note;
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
        $student = Student::all();
        $subject = Subject::all();
        $mark = Mark::join("student", "student.studentCode", "=", "mark.studentCode")
            ->join("subject", "subject.subjectCode", "=", "mark.subjectCode")
            ->find($id);
        return view('mark.editMark', [
            'mark' => $mark,
            'student' => $student,
            'subject' => $subject,
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
        $studentCode = $request->get('name-sv');
        $subjectCode = $request->get('name-subject');
        $mark_final = $request->get('mark_final');
        $mark_skill = $request->get('mark_skill');
        $note = $request->get('note');
        $mark = Mark::find($id);
        $mark->studentCode = $studentCode;
        $mark->subjectCode = $subjectCode;
        $mark->mark_final = $mark_final;
        $mark->mark_skill = $mark_skill;
        $mark->note = $note;
        $mark->save();
        return Redirect::route('mark.index');
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

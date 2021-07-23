<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Semester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listSemester = Semester::all();
        $listSubject = Subject::join("semester","subject.semesterCode","=","semester.semesterCode")
                        ->get();
        return view('subject.listSubject',[
            'listSubject'=>$listSubject,
            'listSemester'=>$listSemester
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $semester = Semester::all();
        return view('subject.createSubject',[
            'semester' => $semester,
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
        $nameSubject = $request->get('name-subject');
        $hours = $request->get('hour');
        $startDate = $request->get('start-date');
        $final = $request->get('final');
        $skill = $request->get('skill');
        $semester = $request->get('semester');
        $subject = new Subject();
        $subject -> nameSubject = $nameSubject;
        $subject -> totalClassHour = $hours;
        $subject -> startDate = $startDate;
        $subject -> isFinal = $final;
        $subject -> isSkill = $skill;
        $subject -> semesterCode = $semester;
        $subject ->save();
        return Redirect::route('subject.index');
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
        $subject = Subject::find($id);
        return view('subject.editSubject',[
            'subject'=>$subject,
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
        $nameSubject = $request->get('name-subject');
        $totalHours = $request->get('total-hour');
        $startDate = $request->get('start-date');
        $final = $request->get('final');
        $skill = $request->get('skill');
        $semesterCode = $request->get('semester');
        $subject = Subject::find($id);
        $subject->nameSubject = $nameSubject;
        $subject->totalClassHour = $totalHours;
        $subject->startDate = $startDate;
        $subject->isFinal= $final;
        $subject->isSkill = $skill;
        $subject->semesterCode = $semesterCode;
        $subject->save();
        return Redirect::route('subject.index');
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

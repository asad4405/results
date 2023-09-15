<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClassOneResultPostRequest;
use App\Models\ClassOneResult;
use App\Models\Result;
use App\Models\Student;
use App\Models\Subject;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        $subjects = Subject::all();
        return view('backend.results.create', compact('students','subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClassOneResultPostRequest $request)
    {
        ClassOneResult::insert([
            'student_id' => Student::where('roll_no',$request->roll_no)->first()->id,
            'roll_no' => $request->roll_no,
            'reg_no' => $request->reg_no,
            'year' => $request->year,
            'class_name' => $request->class_name,
            'bangla' => $request->bangla,
            'english' => $request->english,
            'math' => $request->math,
            'result_publish' => $request->result_publish,
            'created_at' => Carbon::now(),
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Result $result)
    {
        //
    }
}

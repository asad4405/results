<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentAddPostRequest;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('backend.students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentAddPostRequest $request)
    {
        $roll_no = rand(111111,999999);
        $reg_no = rand(1111111111,9999999999);
        Student::insert([
            'student_name' => $request->student_name,
            'fathers_name' => $request->fathers_name,
            'mothers_name' => $request->mothers_name,
            'class_name' => $request->class_name,
            'address' => $request->address,
            'session_year' => $request->session_year,
            'group' => $request->group,
            'student_type' => $request->student_type,
            'gender' => $request->gender,
            'birthday_date' => $request->birthday_date,
            'birthday_certificate_no' => $request->birthday_certificate_no,
            'school_name' => $request->school_name,
            'phone_number' => $request->phone_number,
            'guardians_phone_number' => $request->guardians_phone_number,
            'roll_no' => $roll_no,
            'reg_no' => $reg_no,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('student-create-success','Student Added Successfull!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('backend.students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('backend.students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $student->student_name = $request->student_name;
        $student->fathers_name = $request->fathers_name;
        $student->mothers_name = $request->mothers_name;
        $student->class_name = $request->class_name;
        $student->address = $request->address;
        $student->session_year = $request->session_year;
        $student->group = $request->group;
        $student->student_type = $request->student_type;
        $student->gender = $request->gender;
        $student->birthday_date = $request->birthday_date;
        $student->birthday_certificate_no = $request->birthday_certificate_no;
        $student->school_name = $request->school_name;
        $student->phone_number = $request->phone_number;
        $student->guardians_phone_number = $request->guardians_phone_number;
        $student->save();
        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        return $student->delete();
    }
}

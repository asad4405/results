<?php

namespace App\Http\Controllers;

use App\Models\ClassOneResult;
use App\Models\Student;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function result()
    {
        return view('result');
    }
    public function result_submit(Request $request)
    {
        if(ClassOneResult::where('roll_no',$request->roll_no)->where('reg_no', $request->reg_no)->where('year',$request->year)->where('class_name',$request->exam)->exists()){
            $class_results = ClassOneResult::all();
            $student = Student::where('roll_no',$request->roll_no)->where('reg_no', $request->reg_no)->get();
            return view('show_result',[
                'class_results' => $class_results,
                'student' => $student,
            ]);
        }else{
            return back();
        }
    }
}

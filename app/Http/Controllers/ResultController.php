<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResultPostRequest;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function result()
    {
        return view('result');
    }
    public function result_submit(ResultPostRequest $request)
    {
        return $request;
    }
}

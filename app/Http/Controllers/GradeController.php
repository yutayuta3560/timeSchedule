<?php

namespace App\Http\Controllers;

use App\Grade;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class GradeController extends Controller
{
    public function store()
    {
        $grade = new Grade();
        $grade->school_id = Input::get('school_id');
        $grade->grade = Input::get('grade');
        $grade->save();
    }

    public function show()
    {
        $grade = Grade::where('school_id', '=', Input::get('school_id'))->get();
        return json_encode($grade);
    }
}

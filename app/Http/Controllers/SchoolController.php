<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class SchoolController extends Controller
{
    public function store()
    {
        $school = new School();
        $school->name = Input::get('name');
        $school->kana = Input::get('kana');
        $school->save();
    }

    public function show()
    {
        $school = new School();
        return json_encode($school::all());
    }
}

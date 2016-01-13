<?php

namespace App\Http\Controllers;

use App\ClassRoom;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ClassRoomController extends Controller
{
    public function store()
    {
        $ClassRoom = new ClassRoom();
        $ClassRoom->grade_id = Input::get('grade_id');
        $ClassRoom->classroom_name = Input::get('classroom_name');
        $ClassRoom->save();
    }

    public function show()
    {
        $classroom = ClassRoom::where('grade_id', '=', Input::get('grade_id'))->get();
        return json_encode($classroom);
    }
}

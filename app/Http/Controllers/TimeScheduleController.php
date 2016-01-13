<?php

namespace App\Http\Controllers;

use App\TimeSchedule;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class TimeScheduleController extends Controller
{
    public function store()
    {
        $timeschedule = new TimeSchedule();
        $timeschedule->classroom_id = Input::get('classroom_id');
        $timeschedule->week = Input::get('week');
        $timeschedule->number = Input::get('number');
        $timeschedule->name = Input::get('name');
        $timeschedule->teacher = Input::get('teacher');
        $timeschedule->place = Input::get('place');
        $timeschedule->save();
    }

    public function show()
    {
        $timeschedule = TimeSchedule::where('classroom_id', '=', Input::get('classroom_id'))->get();
        return json_encode($timeschedule);
    }
}

<?php

use Illuminate\Database\Seeder;

class TimeScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\TimeSchedule::create(array(
            'classroom_id' => '1',
            'week' => 1,
            'number' => 2,
            'name' => 'Teaching演習',
            'teacher' => '土居先生',
            'place' => '3602'
        ));
        \App\TimeSchedule::create(array(
            'classroom_id' => '1',
            'week' => 2,
            'number' => 2,
            'name' => 'UNIX',
            'teacher' => '小出',
            'place' => '3202'
        ));
        \App\TimeSchedule::create(array(
            'classroom_id' => '1',
            'week' => 2,
            'number' => 3,
            'name' => 'ITゼミ演習',
            'teacher' => '辻川先生',
            'place' => '2303'
        ));
        \App\TimeSchedule::create(array(
            'classroom_id' => '1',
            'week' => 2,
            'number' => 4,
            'name' => 'ITゼミ演習',
            'teacher' => '辻川先生',
            'place' => '2303'
        ));
        \App\TimeSchedule::create(array(
            'classroom_id' => '1',
            'week' => 3,
            'number' => 1,
            'name' => 'ITゼミ演習',
            'teacher' => '畠先生',
            'place' => '2303'
        ));
        \App\TimeSchedule::create(array(
            'classroom_id' => '1',
            'week' => 3,
            'number' => 2,
            'name' => 'ITゼミ演習',
            'teacher' => '畠先生',
            'place' => '2303'
        ));
        \App\TimeSchedule::create(array(
            'classroom_id' => '1',
            'week' => 3,
            'number' => 3,
            'name' => 'UNIX演習',
            'teacher' => '小出先生',
            'place' => '3602'
        ));
        \App\TimeSchedule::create(array(
            'classroom_id' => '1',
            'week' => 3,
            'number' => 4,
            'name' => 'ITゼミ演習',
            'teacher' => '吉田先生',
            'place' => '2303'
        ));
        \App\TimeSchedule::create(array(
            'classroom_id' => '1',
            'week' => 4,
            'number' => 1,
            'name' => 'ITゼミ演習',
            'teacher' => '吉田先生',
            'place' => '2303'
        ));
        \App\TimeSchedule::create(array(
            'week' => 4,
            'number' => 2,
            'name' => 'ITゼミ演習',
            'teacher' => '吉田先生',
            'place' => '2303'
        ));
        \App\TimeSchedule::create(array(
            'classroom_id' => '1',
            'week' => 4,
            'number' => 3,
            'name' => 'Teaching演習',
            'teacher' => '土居先生',
            'place' => '3402'
        ));
        \App\TimeSchedule::create(array(
            'classroom_id' => '1',
            'week' => 5,
            'number' => 1,
            'name' => '企業会計',
            'teacher' => '平井先生',
            'place' => '1304'
        ));
        \App\TimeSchedule::create(array(
            'classroom_id' => '1',
            'week' => 5,
            'number' => 2,
            'name' => '企業会計',
            'teacher' => '平井先生',
            'place' => '1304'
        ));
        \App\TimeSchedule::create(array(
            'classroom_id' => '1',
            'week' => 5,
            'number' => 3,
            'name' => 'ITゼミ演習',
            'teacher' => '畠先生',
            'place' => '2303'
        ));
    }
}

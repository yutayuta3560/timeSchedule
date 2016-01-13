<?php

use Illuminate\Database\Seeder;

class ClassRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ClassRoom::create(array(
            'grade_id' => '4',
            'classroom_name' => 'IE4A'
        ));

        \App\ClassRoom::create(array(
            'grade_id' => '4',
            'classroom_name' => 'KE4A'
        ));

        \App\ClassRoom::create(array(
            'grade_id' => '4',
            'classroom_name' => 'GR4A'
        ));

        \App\ClassRoom::create(array(
            'grade_id' => '4',
            'classroom_name' => 'GS4A'
        ));
    }
}

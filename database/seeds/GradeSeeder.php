<?php

use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Grade::create(array(
            'school_id' => 1,
            'grade' => '1年',
        ));
        \App\Grade::create(array(
            'school_id' => 1,
            'grade' => '2年',
        ));
        \App\Grade::create(array(
            'school_id' => 1,
            'grade' => '3年',
        ));
        \App\Grade::create(array(
            'school_id' => 1,
            'grade' => '4年',
        ));
    }
}

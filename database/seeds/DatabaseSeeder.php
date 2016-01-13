<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SchoolSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(ClassRoomSeeder::class);
        $this->call(TimeScheduleSeeder::class);
    }
}

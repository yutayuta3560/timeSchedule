<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeSchedule extends Migration
{
    public function up()
    {
        Schema::create('timeschedule', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('classroom_id');
            $table->integer('week'); //曜日(0~6)
            $table->integer('number'); //限目
            $table->string('name'); // 科目名
            $table->string('teacher'); // 先生の名前
            $table->string('place'); // 教室の場所
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('timeschedule');
    }
}

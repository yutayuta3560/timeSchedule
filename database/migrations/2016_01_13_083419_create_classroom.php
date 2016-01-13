<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroom extends Migration
{
    public function up()
    {
        Schema::create('classroom', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grade_id');
            $table->string('classroom_name');
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
        Schema::drop('classroom');
    }
}

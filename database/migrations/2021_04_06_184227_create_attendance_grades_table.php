<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_grdes', function (Blueprint $table) {
            $table->bigIncrements('attendance_id');
            $table->integer('rollNo');
            $table->string('student_name');
            $table->integer('attendance');
            $table->integer('grades');
            $table->integer('teacher');
            $table->softDeletes();
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
        Schema::dropIfExists('attendance_grdes');
    }
}
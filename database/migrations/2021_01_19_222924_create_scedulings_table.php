<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScedulingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedulings', function (Blueprint $table) {
            $table->bigIncrements('scedule_id');
            $table->integer('course_id');
            $table->string('level_id');
            $table->integer('shift_id');
            $table->integer('classroom_id');
            $table->integer('batch_id');
            $table->integer('day_id');
            $table->integer('time_id');
            // $table->integer('teacher_id');
            $table->integer('semester_id');
            $table->time('start_date');
            $table->time('end_date');
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('schedulings');
    }
}

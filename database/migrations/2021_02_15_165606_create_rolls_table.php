<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rolls', function (Blueprint $table) {
            $table->bigIncrements('roll_id');
            $table->integer('student_id'); // this id is a foreign key from the student table okay which is the admission table okay
            $table->string('username'); // student username for login okay
            $table->string('password'); // student password for login okay
            $table->datetime('login_time'); // student login time in the system okay
            $table->datetime('logout_time'); // student logout time from the system okay.
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
        Schema::dropIfExists('rolls');
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('transaction_id');
            $table->integer('student_id');
            $table->integer('fee_id');
            $table->integer('user_id');
            $table->float('paid_amount', 8, 2);
            $table->date('transaction_date');
            $table->longText('remark')->nullable();
            $table->longText('describtion')->nullable();
            // $table->string('status')->default('initiated'); // initiated, complate payment fail, successful.
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
        Schema::dropIfExists('transactions');
    }
}

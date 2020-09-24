<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_transports', function (Blueprint $table) {
            $table->increments('id_transport');
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id_student')->on('model_students');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id_user')->on('model_users');
            $table->double('price',10,2);
            $table->string('ticket');
            $table->string('ticket_date');
            $table->string('payment_method');
            $table->string('bank');
            $table->string('academic_year');
            $table->string('station');
            $table->string('date_payment');
            $table->string('month_payment');
            $table->string('day_payment');
            $table->string('signature');
            $table->string('order_code');
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
        Schema::dropIfExists('model_transports');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelSaleDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_sale_documents', function (Blueprint $table) {
            $table->increments('id_sale');
            $table->string('client');
            $table->string('client_code');
            $table->string('document');
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
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id_user')->on('model_users');
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
        Schema::dropIfExists('model_sale_documents');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_companies', function (Blueprint $table) {
            $table->increments('id_company');
            $table->string('company');
            $table->string('owner');
            $table->integer('contact_id')->unsigned();
            $table->foreign('contact_id')->references('id_contact')->on('model_contacts');
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
        Schema::dropIfExists('model_companies');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_contacts', function (Blueprint $table) {
            $table->increments('id_contact');
            $table->string('telephone')->default('00000');
            $table->string('cellphone')->default('00000');
            $table->string('email')->default('');
            $table->string('social');
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
        Schema::dropIfExists('model_contacts');
    }
}

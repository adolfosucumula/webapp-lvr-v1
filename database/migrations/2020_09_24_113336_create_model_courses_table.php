<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_courses', function (Blueprint $table) {
            $table->increments('id_course');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id_category')->on('model_category_courses')->onDelete('cascade')->onUpdate('cascade');
            $table->string('course');
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
        Schema::dropIfExists('model_courses');
    }
}

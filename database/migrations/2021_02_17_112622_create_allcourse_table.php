<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllcourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allcourse', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('course_name');
            $table->string('course_overview');
            $table->string('course_wsa');
            $table->string('course_prerequisites');
            $table->string('course_objectives');
            $table->string('course_outline');
            $table->string('course_discription');
            $table->string('course_status');
            $table->string('course_categories');
            $table->string('course_image');
            $table->string('course_tags');
            $table->string('course_gallery');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allcourse');
    }
}

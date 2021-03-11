<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_courses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('course_id')->nullable();
            $table->integer('batch_id')->nullable();
            $table->integer('fees')->nullable();
            $table->integer('given_amount')->nullable();
            $table->boolean('p_status')->nullable();
            $table->integer('duration')->nullable();
            $table->boolean('is_certified')->default(0);
            $table->string('result')->nullable();
            $table->string('reference_name')->nullable();
            $table->string('reference_id')->nullable();
            $table->string('reference_mobile')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('student_courses');
    }
}

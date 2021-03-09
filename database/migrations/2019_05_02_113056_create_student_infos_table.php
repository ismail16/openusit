<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('father');
            $table->string('mother');
            $table->string('dob');
            $table->string('gender');
            $table->string('religion');
            $table->string('marital');
            $table->string('last_education');
            $table->string('subject');
            $table->string('result');
            $table->string('pre_address');
            $table->string('pre_upz');
            $table->string('pre_dist');
            $table->string('pre_post');
            $table->string('per_address');
            $table->string('per_upz');
            $table->string('per_dist');
            $table->string('per_post');
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
        Schema::dropIfExists('student_infos');
    }
}

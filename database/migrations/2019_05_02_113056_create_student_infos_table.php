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
            $table->id();
            $table->integer('user_id');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('office_address')->nullable();
            $table->string('nid')->nullable();
            $table->string('occupation');
            $table->string('birthday');
            $table->string('country');
            $table->string('blood_group')->nullable();
            $table->string('gender');
            $table->string('religion');
            $table->string('marital_status');
            $table->string('district');
            $table->string('thana');
            $table->string('zip_code');
            $table->string('guardian_number');
            $table->string('relationship');
            $table->text('ssc')->nullable();
            $table->text('hsc_diploma')->nullable();
            $table->text('graduation')->nullable();
            $table->text('post_graduation')->nullable();
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

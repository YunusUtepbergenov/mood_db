<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->integer('district_code')->unsigned();
            $table->smallInteger('year');
            $table->integer('school_count');
            $table->integer('volume')->default(0);
            $table->integer('student_count');
            $table->integer('class_count');
            $table->integer('male_teachers');
            $table->integer('female_teachers');
            $table->integer('high_qual_teachers');
            $table->integer('first_qual_teachers');
            $table->double('raiting');
            $table->timestamps();
            
            $table->foreign('district_code')->references('code')->on('districts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
}

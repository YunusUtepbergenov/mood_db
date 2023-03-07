<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKindergartensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kindergartens', function (Blueprint $table) {
            $table->id();
            $table->integer('district_code')->unsigned();
            $table->smallInteger('year');
            $table->integer('count');
            $table->integer('volume');
            $table->integer('educators');
            $table->integer('high_qual_educators');
            $table->integer('pupils');
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
        Schema::dropIfExists('kindergartens');
    }
}

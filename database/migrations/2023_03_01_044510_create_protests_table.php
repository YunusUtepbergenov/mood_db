<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProtestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protests', function (Blueprint $table) {
            $table->id();
            $table->integer('district_code')->unsigned();
            $table->date('date');
            $table->integer('count');
            $table->integer('participants');
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
        Schema::dropIfExists('protests');
    }
}

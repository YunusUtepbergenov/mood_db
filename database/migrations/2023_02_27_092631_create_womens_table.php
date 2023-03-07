<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWomensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('womens', function (Blueprint $table) {
            $table->id();
            $table->integer('district_code')->unsigned();
            $table->date('date');
            $table->integer('work_count');
            $table->integer('people_count');
            $table->integer('guilty');
            $table->integer('affected');
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
        Schema::dropIfExists('womens');
    }
}

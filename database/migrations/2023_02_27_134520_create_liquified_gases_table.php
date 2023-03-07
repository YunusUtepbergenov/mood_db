<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiquifiedGasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liquified_gases', function (Blueprint $table) {
            $table->id();
            $table->integer('district_code')->unsigned();
            $table->date('date');
            $table->double('volume', 30, 12);
            $table->double('avg_price', 30, 12);
            $table->double('overall_price', 30, 12);
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
        Schema::dropIfExists('liquified_gases');
    }
}

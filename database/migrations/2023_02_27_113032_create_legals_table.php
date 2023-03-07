<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legals', function (Blueprint $table) {
            $table->id();
            $table->integer('district_code')->unsigned();
            $table->date('date');
            $table->double('overall', 30, 12);
            $table->double('profit_tax', 30, 12);
            $table->double('property_tax', 30, 12);
            $table->double('qqs', 30, 12);
            $table->double('turnover_tax', 30, 12);
            $table->double('land_tax', 30, 12);
            $table->double('excise_tax', 30, 12);
            $table->double('subsoil_tax', 30, 12);
            $table->double('water_tax', 30, 12);
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
        Schema::dropIfExists('legals');
    }
}

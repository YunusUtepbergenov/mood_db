<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appeals', function (Blueprint $table) {
            $table->id();
            $table->integer('district_code')->unsigned();
            $table->date('date');
            $table->integer('communal');
            $table->integer('culture');
            $table->integer('not_included');
            $table->integer('family');
            $table->integer('ecology');
            $table->integer('social');
            $table->integer('security');
            $table->integer('international_relations');
            $table->integer('coronavirus');
            $table->integer('customs');
            $table->integer('economic');
            $table->integer('education');
            $table->integer('healthcare');
            $table->integer('defense');
            $table->integer('court');
            $table->integer('non_govermental');
            $table->integer('bank');
            $table->integer('ict');
            $table->integer('tourism');
            $table->integer('employment');
            $table->integer('state_adminstration');
            $table->integer('finance');
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
        Schema::dropIfExists('appeals');
    }
}

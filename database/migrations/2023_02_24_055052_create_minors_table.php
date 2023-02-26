<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minors', function (Blueprint $table) {
            $table->id();
            $table->integer('district_code')->unsigned();
            $table->date('date');
            $table->integer('work_count');
            $table->integer('people_count');
            $table->integer('ligher_sen');
            $table->integer('release_before');
            $table->integer('reconciliation');
            $table->integer('fined');
            $table->integer('compulsory_serv');
            $table->integer('correctional');
            $table->integer('restr_lib');
            $table->integer('prison');
            $table->integer('probation');
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
        Schema::dropIfExists('minors');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNozimjonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nozimjons', function (Blueprint $table) {
            $table->id();
            $table->integer('district_code')->unsigned();
            $table->date('date');
            $table->double('bs_gen');
            $table->double('b_s_q2');
            $table->double('b_s_q4');
            $table->double('b_s_q6');
            $table->double('bs_score_cur');
            $table->double('b_s_q1');
            $table->double('b_s_q3');
            $table->double('b_s_q5');
            $table->double('bs_score_fut');
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
        Schema::dropIfExists('nozimjons');
    }
}

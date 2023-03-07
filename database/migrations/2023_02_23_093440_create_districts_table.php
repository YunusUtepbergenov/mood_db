<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictsTable extends Migration
{
    protected $connection = 'pgsql';
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->integer('region_code')->unsigned();
            $table->integer('code')->unique();
            $table->string('name');

            $table->timestamps();

            $table->foreign('region_code')->references('code')->on('regions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('districts');
        Schema::dropForeign('districts_region_code_foreign');
    }
}

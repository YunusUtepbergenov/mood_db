<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourtView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement("
            CREATE VIEW court_records 
            AS
            SELECT
                districts.code,
                districts.name,
                minors.date,
                minors.work_count as minor_works,
                minors.people_count as minor_people,
                minors.ligher_sen as minor_lighter_sen,
                minors.release_before as minor_release_bef,
                minors.reconciliation as minor_reconcillation,
                minors.fined as minor_fined,
                minors.compulsory_serv as minor_compulsory_serv,
                minors.correctional as minor_correctional,
                minors.restr_lib as minor_restr_lib,
                minors.prison as minor_prison,
                minors.probation as minor_probation,
                womens.work_count as women_works,
                womens.people_count as women_people,
                womens.guilty as women_guilty,
                womens.affected as women_affected
            FROM districts
                LEFT JOIN minors ON districts.code = minors.district_code
                LEFT JOIN womens ON womens.district_code = districts.code
            WHERE 
                minors.date = womens.date;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('court_view');
    }
}

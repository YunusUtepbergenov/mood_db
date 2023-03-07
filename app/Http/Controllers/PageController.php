<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function analysis(){
        $regions = Region::orderBy('name', 'ASC')->get();
        $districts = District::where('region_code', 1703)->get();
        
        $query = DB::table('regions')->select('regions.code as region_code', 'regions.name' ,'districts.code as district_code', 'nozimjons.date' ,'nozimjons.bs_score_cur as bs_score')
                    ->leftJoin('districts', 'regions.code', '=', 'districts.region_code')
                    ->leftJoin('nozimjons', 'districts.code', '=', 'nozimjons.district_code')->get();
        $query = $query->where('region_code', 1703)->where('district_code', 1703202);
        
        $bs_score = array();
        $dates = array();

        foreach($query as $q){
            array_push($bs_score, $q->bs_score);
            array_push($dates, substr($q->date, 0, 7));
        }

        return view('pages.court.analysis', [
            'regions' => $regions,
            'districts' => $districts,
            'scores' => $bs_score,
            'dates' => $dates
        ]);
    }
}

<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Analysis extends Component
{
    public $bs_score = array(), $dates = array();
    public array $datasets = [];

    protected $listeners = ['changedDistricts', 'changedRegions'];

    public function render()
    {   
        $query = DB::table('regions')->select('regions.code as region_code', 'regions.name' ,'districts.code as district_code', 'nozimjons.date' ,'nozimjons.bs_score_cur as bs_score')
                    ->leftJoin('districts', 'regions.code', '=', 'districts.region_code')
                    ->leftJoin('nozimjons', 'districts.code', '=', 'nozimjons.district_code')->get();

        $query = $query->where('region_code', 1703)->where('district_code', 1703202);
        
        foreach($query as $q){
            array_push($this->bs_score, $q->bs_score);
            array_push($this->dates, substr($q->date, 0, 7));
        }

        return view('livewire.analysis');
    }

    public function changedDistricts($code){
        $query = DB::table('regions')->select('regions.code as region_code', 'regions.name' ,'districts.code as district_code', 'nozimjons.date' ,'nozimjons.bs_score_cur as bs_score')
                    ->leftJoin('districts', 'regions.code', '=', 'districts.region_code')
                    ->leftJoin('nozimjons', 'districts.code', '=', 'nozimjons.district_code')->get();
        $query = $query->where('district_code', $code);
        $this->bs_score = [];
        $this->dates = [];
        foreach($query as $q){
            array_push($this->bs_score, floatval($q->bs_score));
            array_push($this->dates, substr($q->date, 0, 7));
        }
        $this->datasets = [
            [
                'label' => 'Аҳоли кайфияти',
                'data' => $this->bs_score,
            ],
        ];
        $this->emit('updateChart', [
            'datasets' => $this->datasets,
            'labels' => $this->dates,
        ]);
    }

    public function changedRegions($code){
        $query = DB::table('regions')->select('nozimjons.date',
                                        DB::raw('AVG(nozimjons.bs_score_cur) as bs_score'))->where('region_code', $code)
                                    ->leftJoin('districts', 'regions.code', '=', 'districts.region_code')
                                    ->leftJoin('nozimjons', 'districts.code', '=', 'nozimjons.district_code')->groupBy('nozimjons.date')->orderBy('nozimjons.date')->get();
        
        $this->bs_score = [];
        $this->dates = [];
        foreach($query as $q){
        array_push($this->bs_score, floatval($q->bs_score));
        array_push($this->dates, substr($q->date, 0, 7));
        }
        $this->datasets = [
            [
                'label' => 'Аҳоли кайфияти',
                'data' => $this->bs_score,
            ],
        ];
        $this->emit('updateChart', [
            'datasets' => $this->datasets,
            'labels' => $this->dates,
        ]);
    }
}

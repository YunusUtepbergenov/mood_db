<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Livewire\Component;

class Filter extends Component
{

    public $translate = [
        'minor_works' => 'Voyaga etmaganlar ishi',
        'minor_people' => 'Voyaga etmagan shaxslar sudi',
        'minor_lighter_sen' => 'Ayblovi engillashtirilgan'
    ];

    public $columns = [], $filters = [];
    
    public function render()
    {
        $this->columns = [];
        $array = ['id', 'region_code','district_code', 'created_at', 'updated_at', 'name', 'date', 'code'];
        $sud = DB::table('court_records')->get();
        if($this->filters){
            foreach($this->filters as $table){
                $this->columns = array_merge($this->columns, Schema::getColumnListing($table));
                $this->columns = array_diff($this->columns, $array);
            }
            
        }

        return view('livewire.filter');
    }
}

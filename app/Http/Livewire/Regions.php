<?php

namespace App\Http\Livewire;

use App\Models\District;
use App\Models\Region;
use Livewire\Component;

class Regions extends Component
{
    public $regions, $districts;
    public $region, $district;

    public function render()
    {
        $this->regions = Region::orderBy('name', 'ASC')->get();
        if($this->region){
            $this->districts = District::where('region_code', $this->region)->get();
        }else{
            $this->districts = District::where('region_code', 1703)->get();
        }
        return view('livewire.regions');
    }

    public function updatedRegion(){
        $this->emit('changedRegions', $this->region);
    }

    public function updatedDistrict(){
        $this->emit('changedDistricts', $this->district);
    }
}

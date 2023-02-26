<?php

namespace App\Imports;

use App\Models\Minor;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class MinorsImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            Minor::create([
                'name' => $row[0],
            ]);
        }
    }
}

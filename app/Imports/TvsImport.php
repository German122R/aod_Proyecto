<?php

namespace App\Imports;

use App\Models\Tv;
use Maatwebsite\Excel\Concerns\ToModel;

class TvsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tv([
            'brand'=>$row['0'],
            'model'=>$row['1'],
            'accessories'=>$row['2'],
            'color'=>$row['3'],
            'legs'=>$row['4'],
            'keys'=>$row['5'],
            'inches'=>$row['6'],
            'control'=>$row['7'],
            'description'=>$row['8'],
            'comment'=>$row['9'],
            'available'=>$row['10'],
        ]);
    }
}

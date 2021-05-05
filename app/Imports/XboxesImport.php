<?php

namespace App\Imports;

use App\Models\Xbox;
use Maatwebsite\Excel\Concerns\ToModel;

class XboxesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Xbox([
            'brand'=>$row['0'],
            'model'=>$row['1'],
            'accessories'=>$row['2'],
            'color'=>$row['3'],
            'generation'=>$row['4'],
            'control'=>$row['5'],
            'games'=>$row['6'],
            'launch'=>$row['7'],
            'control'=>$row['8'],
            'description'=>$row['9'],
            'comment'=>$row['10'],
            'available'=>$row['11'],
        ]);
    }
}

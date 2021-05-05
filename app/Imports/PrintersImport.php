<?php

namespace App\Imports;

use App\Models\Printer;
use Maatwebsite\Excel\Concerns\ToModel;

class PrintersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Printer([
            'brand'=>$row['0'],
            'model'=>$row['1'],
            'accessories'=>$row['2'],
            'color'=>$row['3'],
            'connectivity'=>$row['4'],
            'printcolor'=>$row['5'],
            'resolution'=>$row['6'],
            'speed'=>$row['7'],
            'pagesperminute'=>$row['8'],
            'keys'=>$row['9'],
            'description'=>$row['10'],
            'comment'=>$row['11'],
            'available'=>$row['12'],
        ]);
    }
}

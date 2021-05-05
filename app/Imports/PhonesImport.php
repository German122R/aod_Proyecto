<?php

namespace App\Imports;

use App\Models\Phone;
use Maatwebsite\Excel\Concerns\ToModel;

class PhonesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Phone([
             'brand'=>$row['0'],
             'model'=>$row['1'],
             'accessories'=>$row['2'],
             'color'=>$row['3'],
             'memory'=>$row['4'],
             'chip'=>$row['5'],
             'protective'=>$row['6'],
             'description'=>$row['7'],
             'comment'=>$row['8'],
             'available'=>$row['9'],
            
        ]);
    }
}

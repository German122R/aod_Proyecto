<?php

namespace App\Exports;

use App\Models\Xbox;
use Maatwebsite\Excel\Concerns\FromCollection;

class XboxExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Xbox::all();
    }
}

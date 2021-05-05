<?php

namespace App\Exports;

use App\Models\Printer;
use Maatwebsite\Excel\Concerns\FromCollection;

class PrinterExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Printer::all();
    }
}

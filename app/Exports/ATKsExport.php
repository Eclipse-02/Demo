<?php

namespace App\Exports;

use App\Models\PencatatanATK;
use Maatwebsite\Excel\Concerns\FromCollection;

class ATKsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PencatatanATK::all();
    }
}

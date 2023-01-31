<?php

namespace App\Exports;

use App\Models\Proprice;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportUser implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Proprice::select('part_type','part_description','product_info','color','quantity','part_number','single_product','bulk_product')->get();
    }
}

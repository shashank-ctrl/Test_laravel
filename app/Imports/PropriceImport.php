<?php

namespace App\Imports;

use App\Models\Proprice;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PropriceImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        return new Proprice([
            "part_type" => $row['part_type'],
            "part_description" => $row['part_description'],
            "product_info" => $row['product_info'],
            "color" => $row['color'],
            "quantity" => $row['quantity'],
            "part_number" => $row['part_number'],
            "single_product" => $row['single_product'],
            "bulk_product" => $row['bulk_product']
        ]);
    }
}

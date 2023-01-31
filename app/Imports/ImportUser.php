<?php

namespace App\Imports;

use App\Models\Proprice;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportUser implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Proprice([

            "part_type" => $row[0],
            "part_description" => $row[1],
            "product_info" => $row[2],
            "color" => $row[3],
            "quantity" => $row[4],
            "part_number" => $row[5],
            "single_product" => $row[5],
            "bulk_product" => $row[6]
           
        ]);
    }
}

<?php

namespace App\Imports;

use App\Category;
use Maatwebsite\Excel\Concerns\ToModel;

class CategoryImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Category([
            'category_name'     => $row[1],
            'description'    => $row[2],
            'slug'    => $row[3],
        ]);
    }
}

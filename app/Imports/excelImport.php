<?php

namespace App\Imports;

use App\Models\excel;
use Maatwebsite\Excel\Concerns\ToModel;

class excelImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new excel([
            'name'=>$row[0],
            'email'=>$row[1],
            'password' => bcrypt($row[2])

        ]);
    }
}

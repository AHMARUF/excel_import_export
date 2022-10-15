<?php

namespace App\Imports;

use App\Models\Students;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Students([
            'name'=>$row[0],
            'roll'=>$row[1],
            'father_name'=>$row[2],
            'mother_name'=>$row[3],
            'number'=>$row[4],
        ]);
    }
}

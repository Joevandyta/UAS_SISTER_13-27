<?php

namespace App\Imports;

use App\Models\Student;
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
        return new Student([
            'student_name' => $row[1],
            'nim'=> $row[2], 
            'gender'=> $row[3],
            'nilai'=> $row[4],
            'kelas'=> $row[5],
        ]);
    }
}
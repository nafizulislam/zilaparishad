<?php

namespace App\Imports;

use App\Models\Project;
use Maatwebsite\Excel\Concerns\ToModel;

class ProjectImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Project([
            'prokolpo_no'    => $row[0],
            'upozela'    => $row[1],
            'prokolpo_name' => $row[2],
            'prokolpo_type' => $row[3],
            'amount' => $row[4],
            'minister_number',
            
        ]);
    }
}

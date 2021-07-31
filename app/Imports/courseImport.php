<?php

namespace App\Imports;

use App\Models\allcourse;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class courseImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new allcourse([
            //
            'course_name' =>$row['course_name'],
            'course_overview' =>$row['course_overview'],
            'course_wsa' =>$row['course_wsa'],
            'course_prerequisites' =>$row['course_prerequisites'],
            'course_objectives' =>$row['course_objectives'],
            'course_outline' =>$row['course_outline'],
            'course_discription' =>$row['course_discription'],
            'course_status' =>$row['course_status'],
            'course_categories' =>$row['course_categories'],
            'course_image' =>$row['course_image'],
            'course_tags' =>$row['course_tags'],
            'course_gallery' =>$row['course_gallery'],
            'partner_name' =>$row['partner_name'],
            'price' =>$row['price'],
        ]);
    }
}

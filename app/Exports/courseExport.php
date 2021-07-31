<?php

namespace App\Exports;

use App\Models\allcourse;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class courseExport implements FromCollection,WithHeadings
{

    protected $field;

    function __construct($field) 
    {
        $this->field = $field;
    } 
    
     public function headings():array{
        
            return [
                $this->field
            ];
        }

    // public function headings():array{
    //         return [
            
    //             'id',
    //             'created_at',
    //             'updated_at',
    //             'course_name',
    //             'course_overview',
    //             'course_wsa',
    //             'course_prerequisites',
    //             'course_objectives',
    //             'course_outline',
    //             'course_discription',
    //             'course_status',
    //             'course_categories',
    //             'course_image',
    //             'course_tags',
    //             'course_gallery',
    //             'partner_name',
    //             'price'
    //         ];
    // }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       
        // return allcourse::all(); 
        return allcourse::select($this->field)->get();
        // return collect(allcourse::getCourse());
    }
   
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class allcourse extends Model
{
    use HasFactory;

    protected $table='allcourse';

    protected $fillable =['course_name','course_overview','course_wsa','course_prerequisites','course_objectives','course_outline','course_discription','course_status','course_categories','course_image','course_tags','course_gallery','partner_name','price',];

}

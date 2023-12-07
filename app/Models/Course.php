<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['category_id','brands','certificate_img','title','slug','sub_title','what_you_will_learn','course_description','thumbnail','video','price'];

    // public function video_list()
    // {
    //     return $this->belongsTo(Video::class,'course_id');
    // }
}

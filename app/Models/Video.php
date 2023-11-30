<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = ['cat_id','course_id','vdo_priority','video','vdo_url','language','sub_title','watch_on','access_time'];

    // public function course()
    // {
    //     return $this->hasMany(Course::class,'id');
    // }
}

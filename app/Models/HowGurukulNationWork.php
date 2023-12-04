<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HowGurukulNationWork extends Model
{
    use HasFactory;
    protected $fillable = ['title','sub_title','details','title2','sub_title2','details2','title3','sub_title3','details3'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mainBanner extends Model
{
    use HasFactory;
    protected $fillable = ['title1','title2','title3','content1','content2','content3','banner1','banner2','banner3'];
}

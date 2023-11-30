<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearnerSupport extends Model
{
    use HasFactory;
    protected $fillable = ['mobile_no','days_n_time','image','desclaimer'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurStoryAndMission extends Model
{
    use HasFactory;
    protected $table = 'our_story_n_missions';
    protected $fillable = ['title_our_story','desc_our_story','title_our_mission','disc_our_mission','bullets1_our_mission','bullets2_our_mission','foundend_yrs','image'];
}

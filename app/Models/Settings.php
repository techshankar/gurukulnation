<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $fillable = ['meta_title','meta_desc','privacy_policy','termsncondtions','whatsp','insta','twitter','fb'];
}

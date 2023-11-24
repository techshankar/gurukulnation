<?php

use Illuminate\Support\Str;
 /**
  * MAKE AVATAR FUNCTION
  */
  if(!function_exists('makeAvatar')){

       function makeAvatar($fontPath, $dest, $char){
           $path = $dest;
           $image = imagecreate(200,200);
           $red = rand(0,255);
           $green = rand(0,255);
           $blue = rand(0,255);
           imagecolorallocate($image,$red,$green,$blue);
           $textcolor = imagecolorallocate($image,255,255,255);
           imagettftext($image,100,0,50,150,$textcolor,$fontPath,$char);
           imagepng($image,$path);
           imagedestroy($image);
           return $path;
       }
  }

  
function generateUniqueSlug($title, $table, $column = 'slug', $separator = '-')
{
    $slug = Str::slug($title, $separator);

    // Check if the generated slug already exists in the database
    $count = DB::table($table)->where($column, $slug)->count();

    if ($count > 0) {
        // If the slug exists, append a number to make it unique
        $originalSlug = $slug;
        $i = 1;

        do {
            $slug = $originalSlug . $separator . $i;
            $count = DB::table($table)->where($column, $slug)->count();
            $i++;
        } while ($count > 0);
    }

    return $slug;
}


?>
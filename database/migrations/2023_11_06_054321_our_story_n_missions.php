<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OurStoryNMissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_story_n_missions', function(Blueprint $table){
            $table->id();
            $table->string('title_our_story')->nullable();
            $table->string('desc_our_story')->nullable();
            $table->string('title_our_mission')->nullable();
            $table->string('disc_our_mission')->nullable();
            $table->string('bullets1_our_mission')->nullable();
            $table->string('bullets2_our_mission')->nullable();
            $table->string('foundend_yrs')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

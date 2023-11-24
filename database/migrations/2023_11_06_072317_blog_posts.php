<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BlogPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function(Blueprint $table){
            $table->id();
            $table->foreignId('catgory_id');
            $table->foreign('catgory_id')->references('id')->on('blog_category')->onDelete('cascade');
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->datetime('posted_at');
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

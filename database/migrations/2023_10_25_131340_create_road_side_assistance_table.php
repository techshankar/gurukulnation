<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoadSideAssistanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('road_side_assistance', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('vehicle_id');
            $table->string('service_id');
            $table->integer('contact_no');
            $table->string('address');
            $table->string('landmark');
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
        Schema::dropIfExists('road_side_assistance');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackersMoversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packers_movers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('city')->nullable();
            $table->string('shifting_from');
            $table->string('shifting_to');
            $table->date('date_slot')->nullable();
            $table->string('time_slot')->nullable();
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
        Schema::dropIfExists('packers_movers');
    }
}

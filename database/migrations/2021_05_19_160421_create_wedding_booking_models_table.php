<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeddingBookingModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wedding_booking_models', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('username');
            $table->string('mob');
            $table->string('altmob');
            $table->string('bfrom');
            $table->string('bto');
            $table->string('blocation');
            $table->string('btype');
            $table->string('amt');
            $table->string('veg');
            $table->string('non_veg');
            $table->string('veg_imfl');
            $table->string('non_veg_imfl');
            $table->string('ex_liquor');
            $table->string('ex_cooldrinks');
            $table->string('audio_visual');
            $table->string('live_cast');
            $table->string('message',2000)->nullable();
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
        Schema::dropIfExists('wedding_booking_models');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeddingEventModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wedding_event_models', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('start_date');
            $table->string('start_time');
            $table->string('end_date');
            $table->string('end_time');
            $table->string('veg');
            $table->string('non_veg');
            $table->string('veg_imfl');
            $table->string('non_veg_imfl');
            $table->string('ex_liquor');
            $table->string('ex_cool_drinks');
            $table->string('audio_visual');
            $table->string('live_casting');
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
        Schema::dropIfExists('wedding_event_models');
    }
}

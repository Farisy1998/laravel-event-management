<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartyVenueModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('party_venue_models', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('venue_type');
            $table->string('amt_per_person');
            $table->string('party_type');
            $table->string('venue_style');
            $table->string('part_no');
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
        Schema::dropIfExists('party_venue_models');
    }
}

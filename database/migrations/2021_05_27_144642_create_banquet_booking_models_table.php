<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanquetBookingModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banquet_booking_models', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('mob');
            $table->string('alt_mob',20)->nullable();
            $table->string('book_type');
            $table->string('fee_type');
            $table->string('from_date');
            $table->string('to_date');
            $table->string('location');
            $table->string('book_date');
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
        Schema::dropIfExists('banquet_booking_models');
    }
}

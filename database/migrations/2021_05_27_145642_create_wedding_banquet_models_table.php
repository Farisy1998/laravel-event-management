<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeddingBanquetModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wedding_banquet_models', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('banquet_type');
            $table->string('amt_per_person');
            $table->string('banquet_style');
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
        Schema::dropIfExists('wedding_banquet_models');
    }
}

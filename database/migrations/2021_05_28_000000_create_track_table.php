<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('track', function (Blueprint $table) {
            $table->id();
            $table->double('temp');
            $table->double('fuel_capacity');
            $table->double('speed');
            $table->double('loc_lat');
            $table->double('loc_lng');
            $table->string('status');
            $table->foreignId('delivery_id')->constrained('delivery')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('track');
    }
}

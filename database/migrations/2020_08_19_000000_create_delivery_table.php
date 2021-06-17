<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery', function (Blueprint $table) {
            $table->id();
            $table->string('delivery_type');
            $table->string('pickup_location');
            $table->string('destination_location');

            $table->dateTime('date_pickup');
            $table->integer('cost');

            // $table->foreignId('source_warehouse')->constrained('warehouse')->cascadeOnUpdate()->cascadeOnDelete()->nullable(true);
            // $table->foreignId('dest_warehouse')->constrained('warehouse')->cascadeOnUpdate()->cascadeOnDelete()->nullable(true);
            $table->foreignId('driver_id')->constrained('driver')->cascadeOnUpdate()->cascadeOnDelete();
            // $table->foreignId('product_id')->constrained('product')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('vehicle_id')->constrained('vehicle')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('product')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('delivery');
    }
}

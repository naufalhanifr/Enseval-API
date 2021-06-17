<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutboundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outbound', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity_out');
            $table->integer('cost');
            $table->string('out_date');
<<<<<<< HEAD
            $table->foreignId('product_id')->constrained('product')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('delivery_id')->constrained('delivery')->cascadeOnUpdate()->cascadeOnDelete();
            // $table->dateTime('date_inbound');
=======
            $table->string('delivery_id');
            $table->foreignId('vehicle_id')->constrained('vehicle')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('product')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('warehouse_id')->constrained('warehouse')->cascadeOnUpdate()->cascadeOnDelete();

>>>>>>> 08fe21f30facd1444d295efbcefefd918550f89e
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
        Schema::dropIfExists('outbound');
    }
}

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
            $table->integer('cost');
            $table->foreignId('product_id')->constrained('product')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('warehouse_id')->constrained('warehouse')->cascadeOnUpdate()->cascadeOnDelete();
            // $table->dateTime('date_outbound');
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

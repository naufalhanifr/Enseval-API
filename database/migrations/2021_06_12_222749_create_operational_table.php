<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operational', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maintenance_id')->constrained('maintenance')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('inbound_id')->constrained('inbound')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('outbound_id')->constrained('outbound')->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('expense_id');
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
        Schema::dropIfExists('operational');
    }
}

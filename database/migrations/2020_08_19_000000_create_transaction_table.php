<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('income', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->string('note');
            $table->string('source');
            $table->timestamps();
        });
        Schema::create('expense', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->string('note');
            $table->string('source');
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
        Schema::dropIfExists('income');
        Schema::dropIfExists('expense');
    }
}

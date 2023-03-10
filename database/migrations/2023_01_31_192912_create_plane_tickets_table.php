<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plane_tickets', function (Blueprint $table) {
            $table->id();
            $table->String('From');
            $table->String('To');
            $table->dateTime('Departure');
            $table->dateTime('Return');
            $table->String('Type');
            $table->boolean('Baggage');
            $table->foreignID('UserID');
            $table->foreignID('Class');
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
        Schema::dropIfExists('plane_tickets');
    }
};

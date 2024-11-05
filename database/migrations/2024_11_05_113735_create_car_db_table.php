<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('car_dbs', function (Blueprint $table) {
            $table->id();
            $table->string("maker");
            $table->string("modell");
            $table->string("üzemanyag");
            $table->string("shifter");
            $table->string("body");
            $table->string("color");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_db');
    }
};

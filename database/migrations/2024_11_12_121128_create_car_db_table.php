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
            $table->unsignedBigInteger("maker_id");
            $table->foreign('maker_id')->references('id')->on('makers')->onDelete('cascade');
            $table->unsignedBigInteger("modell_id");
            $table->foreign('modell_id')->references('id')->on('cars')->onDelete('cascade');
            $table->unsignedBigInteger("üzemanyag_id");
            $table->foreign('üzemanyag_id')->references('id')->on('fuels')->onDelete('cascade');
            $table->unsignedBigInteger("shifter_id");
            $table->foreign('shifter_id')->references('id')->on('shifters')->onDelete('cascade');
            $table->unsignedBigInteger("body_id");
            $table->foreign('body_id')->references('id')->on('bodies')->onDelete('cascade');
            $table->unsignedBigInteger("color_id");
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_dbs');
    }
};

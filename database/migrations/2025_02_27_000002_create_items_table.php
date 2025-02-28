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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('no_asset'); //GA03080001
            $table->unsignedBigInteger('category_id');
            $table->string('item_name'); //Laptop Acer Ryzen 3
            $table->text('item_desc'); //Laptop untuk engineer
            $table->string('model'); //Acer Aspire N414
            $table->string('manufacturer'); //Acer
            $table->string('serial_number'); //NXHVVSN01513809A9E7600
            $table->string('status'); //Deployed, Stock
            $table->string('condition'); //Good, Breakdown
            $table->string('assign_to'); //Good, Breakdown
            $table->string('image'); //Gambar asset
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};

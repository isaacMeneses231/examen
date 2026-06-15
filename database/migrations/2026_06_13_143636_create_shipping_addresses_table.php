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
        Schema::create('shipping_addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->string('street', 255);
            $table->string('neighborhood', 255);
            $table->string('city', 255);
            $table->string('location_reference', 255);
            $table->string('address_status', 255);

            $table->unsignedBigInteger('client_id');
            
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_addresses');
    }
};

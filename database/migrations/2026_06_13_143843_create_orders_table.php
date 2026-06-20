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
        Schema::create('orders', function (Blueprint $table) {
           $table->increments('id');
           $table->dateTime('order_date');
           $table->decimal('subtotal', 12, 2);
           $table->decimal('iva_amount', 12, 2);
           $table->decimal('general_total', 12, 2);
           $table->string('additional_notes', 255);
           $table->string('order_status', 20);

           $table->integer('client_id')->unsigned();
           $table->integer('shipping_address_id')->unsigned();

           $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
           $table->foreign('shipping_address_id')->references('id')->on('shipping_addresses')->onDelete('cascade')->onUpdate('cascade');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

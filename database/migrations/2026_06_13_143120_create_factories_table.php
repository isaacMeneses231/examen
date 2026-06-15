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
        Schema::create('factories', function (Blueprint $table) {
           $table->id();
           $table->string('company_name', 150);
           $table->string('tax_id', 50);
           $table->string('contact_phone', 20);
           $table->string('supplier_email', 255);
           $table->string('physical_address', 255);
           $table->string('supplier_status', 20);
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factories');
    }
};

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
        Schema::create('article_factories', function (Blueprint $table) {
            $table->id();
            $table->integer('current_stock');
            $table->decimal('negotiated_supplier_cost', 12, 2);
            $table->integer('estimated_delivery_time');
            
            $table->unsignedBigInteger('factory_id');
            $table->unsignedBigInteger('article_id');
    
            $table->foreign('factory_id')->references('id')->on('factories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_factories');
    }
};

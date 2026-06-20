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
            $table->decimal('supplier_cost', 12, 2);
            $table->integer('delivery_time');
            
            $table->integer('factory_id')->unsigned();
            $table->integer('article_id')->unsigned();
    
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

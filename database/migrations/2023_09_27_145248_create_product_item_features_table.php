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
        Schema::create('product_item_features', function (Blueprint $table) {
            $table->id();
            $table->string('feature');
            $table->string('value');
            $table->unsignedBigInteger('product_item_id');
            $table->foreign('product_item_id')->references('id')->on('product_items');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_item_features');
    }
};

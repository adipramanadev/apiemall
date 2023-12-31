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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->longText('description');
            $table->integer('offer');
            $table->double('min_order');
            $table->double('max_discount');
            $table->boolean('for_only_one_time')->default(true);
            $table->boolean('for_new_user')->default(false);
            $table->boolean('is_active')->default(true);
            $table->date('started_at')->default(now());
            $table->date('expired_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};

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
        Schema::create('checkout_items', function (Blueprint $table) {
            $table->id();

            $table->foreignId('checkout_id')->constrained('checkout')->onDelete('cascade');
            $table->unsignedBigInteger('food_id');

            $table->string('name');
            $table->string('image')->nullable();
            $table->decimal('price', 8, 2);
            $table->integer('quantity');
            $table->decimal('total_price', 10, 2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkout_items');
    }
};

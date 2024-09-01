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
        Schema::create('reservation_discounts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('reservation_id')->constrained();
            $table->foreignId('discount_id')->constrained();
            $table->decimal('applied_amount', 8, 2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_discounts');
    }
};

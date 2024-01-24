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
        Schema::create('domains', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('url')->nullable();
            $table->string('dns')->nullable();
            $table->string('price')->nullable();
            $table->enum('price_currency', ['TRY', 'USD','EUR'])->default('TRY');
            $table->enum('status', ['active', 'passive','waiting_payment'])->default('active');
            $table->string('description')->nullable();
            $table->dateTime('expired_date')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domains');
    }
};

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
        Schema::create('cabinets', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->enum('u_size',['15U','23U','47U'])->default('47U');
            $table->enum('internet', ['50 Mbps', '100 Mbps','250 Mbps','500 Mbps','1 Gbps','2 Gbps','5 Gbps','10 Gbps','Other'])
                ->default('Other');
            $table->enum('uplink', ['1 Gbps', '10 Gbps'])->default('1 Gbps');
            $table->enum('ip',['29','28','27','26','25','24'])->default('24');
            $table->enum('anti_ddos',['yes','no'])->default('no');
            $table->enum('price_currency', ['TRY', 'USD','EUR'])->default('TRY');
            $table->string('price')->nullable();
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
        Schema::dropIfExists('cabinets');
    }
};

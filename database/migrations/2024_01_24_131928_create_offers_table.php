<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        /**
         * Run the migrations.
         */
        public function up(): void
        {
            Schema::create('offers', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->enum('service_type', ['domain', 'server', 'location', 'other'])->default('other');
                $table->text('details')->nullable();
                $table->enum('status', ['active', 'passive', 'waiting_answers', 'rejected'])->default('active');
                $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('offers');
        }
    };

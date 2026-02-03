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
        Schema::create('rice_fields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->string('location');
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longtitude', 10, 7)->nullable();
            $table->decimal('area_size', 10, 2);
            $table->decimal('price', 15, 2);
            $table->enum('irrigation_type', [
                'teknis',
                'setengah_teknis',
                'tadah_hujan'
            ]);
            $table->string('soil_type')->nullable(); // tanah liat, berpasir, dll
            $table->string('certificate_type')->nullable(); // SHM, girik
            $table->enum('status', [
                'available',
                'pending',
                'sold'
            ])->default('available');
            $table->boolean('is_active')->default('true');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rice_fields');
    }
};

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
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('urdu_name')->nullable();
            $table->string('scientific_name')->nullable();
            $table->string('slug')->unique();
            $table->text('short_description');
            $table->text('description');
            $table->unsignedInteger('price_pkr');
            $table->unsignedInteger('original_price_pkr')->nullable();
            $table->unsignedInteger('stock')->default(25);
            $table->string('pot_size')->default('8-inch Terracotta / Poly Pot');
            $table->string('growth_stage')->default('Healthy Sapling with Root System');
            $table->string('harvest_time')->default('45 - 60 Days');
            $table->string('sunlight')->default('Full Sunlight (5-6 hrs)');
            $table->string('watering')->default('Daily / Every 2 Days');
            $table->string('difficulty')->default('Beginner Friendly');
            $table->decimal('rating', 3, 1)->default(4.8);
            $table->unsignedInteger('reviews_count')->default(24);
            $table->string('badge')->nullable();
            $table->string('image_url');
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_organic')->default(true);
            $table->string('origin_city')->default('Lahore / Pattoki');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plants');
    }
};

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
        Schema::create('seller_listings', function (Blueprint $table) {
            $table->id();
            $table->string('seller_name');
            $table->string('seller_phone');
            $table->string('seller_city');
            $table->string('nursery_or_farm_name')->nullable();
            $table->string('plant_type');
            $table->string('variety_name');
            $table->unsignedInteger('proposed_price_pkr');
            $table->unsignedInteger('quantity_available');
            $table->text('details');
            $table->string('status')->default('Pending Review');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seller_listings');
    }
};

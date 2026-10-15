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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('customer_email')->nullable();
            $table->string('shipping_city');
            $table->text('shipping_address');
            $table->string('payment_method')->default('Cash on Delivery (COD)');
            $table->text('delivery_notes')->nullable();
            $table->unsignedInteger('subtotal_pkr');
            $table->unsignedInteger('shipping_fee_pkr')->default(200);
            $table->unsignedInteger('total_pkr');
            $table->string('status')->default('Confirmed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

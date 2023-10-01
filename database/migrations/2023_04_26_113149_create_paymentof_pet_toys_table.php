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
        Schema::create('payment_of_pet_toys', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->integer('Product_id');
            $table->string('Product_name');
            $table->string('total_paid_price');
            // $table->string('Order_id');
            $table->string('Razorpay_Payment_id');
            $table->boolean('payment_done');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paymentof_pet_toys');
    }
};

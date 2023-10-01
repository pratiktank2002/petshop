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
        Schema::table('payment_of_petproduct', function (Blueprint $table) {
            //
            $table->decimal('Total_paid_price', 15)->after('Product_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payment_of_petproducts', function (Blueprint $table) {
            //
        });
    }
};

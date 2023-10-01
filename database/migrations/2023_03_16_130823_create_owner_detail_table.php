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
        Schema::create('owner_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Owner_id')->index()->nullable();
            // $table->foreign('Owner_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreignId('users_id');
            $table->string('owner_name');
            $table->string('email');
            $table->string('phone_number');
            $table->text('address_1');
            $table->text('address_2');
            $table->string('city');
            $table->string('pincode'); 
            $table->string('state');
            $table->string('country');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owner_detail');
    }
};

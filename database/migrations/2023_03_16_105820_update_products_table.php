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
        //
        Schema::table('products', function($table)
        {
            $table->string('Owner_id')->after('id')->nullable();
            // $table->foreign('Owner_id')->references('id')->on('owner_detail')->onDelete('cascade');
            $table->string('age')->after('pet_name');
            $table->string('category');
            $table->string('Short_Description');
            $table->text('Other_Information')->after('detail');
            $table->string('other_images')->after('image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

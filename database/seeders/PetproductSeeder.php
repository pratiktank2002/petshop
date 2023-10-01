<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Pet_Product; 

class PetproductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        // DB::table('pet_product')->insert([
        //     [
        //         'product_name' => 'Bird seeds',
        //         'product_price' => 199,
        //         'product_image' => 'frontend/img/product-1.png',
        //         'product_detail' => 'Birds seeds With added Vitamins and Minerals.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'product_name' => 'Nature domain',
        //         'product_price' => 100,
        //         'product_image' => 'frontend/img/product-2.png',
        //         'product_detail' => 'Cat Seeds with flavours.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'product_name' => 'Whole Earth',
        //         'product_price' => 150,
        //         'product_image' => 'frontend/img/product-3.png',
        //         'product_detail' => 'grain free recipe for all Breeds at all life stages. ',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'product_name' => 'Whole Earth Farms',
        //         'product_price' => 250,
        //         'product_image' => 'frontend/img/product-4.png',
        //         'product_detail' => 'Seeds for all types of breeds of pet.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'product_name' => 'American journey',
        //         'product_price' => 355,
        //         'product_image' => 'frontend/img/newproduct/product.jpg',
        //         'product_detail' => 'Salmon And Sweet potato recipe for dog.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'product_name' => 'grass Protection',
        //         'product_price' => 80,
        //         'product_image' => 'frontend/img/newproduct/product2.jpg',
        //         'product_detail' => 'Soft Chews for dogs',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'product_name' => 'tyles Freeze Dried',
        //         'product_price' => 120,
        //         'product_image' => 'frontend/img/newproduct/product3.jpg',
        //         'product_detail' => 'Freeze Drieds beef pices for pet.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     // Add more products here
        // ]);

        DB::table('pet_product')->insert([

            [
                'product_name' => 'Cat Clumping Litter',
                'product_price' => 1100,
                'product_image' => 'frontend/img/newproduct/cat-litter.png',
                'product_detail' => 'Lavender scented clumping formula,made with natural lavender oil.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_name' => 'Canine Creek',
                'product_price' => 5300,
                'product_image' => 'frontend/img/newproduct/product4.png',
                'product_detail' => 'Ultra Premium Dry Food and grain free formula.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_name' => 'Drools Focus',
                'product_price' => 3415,
                'product_image' => 'frontend/img/newproduct/product5.png',
                'product_detail' => 'Super Premium Dog Food is a corn, soya, and wheat free.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_name' => 'Gourmet Bites for Adult Dogs',
                'product_price' => 2025,
                'product_image' => 'frontend/img/newproduct/product7.png',
                'product_detail' => 'real chicken with the health benefits of pumpkin, brussels sprouts and french beans.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}

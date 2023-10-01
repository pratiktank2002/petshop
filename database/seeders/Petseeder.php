<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class Petseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('Products')->insert([

            [
                'pet_name' => 'Max',
                'user_id' => '3',
                'age' => '3.2',
                'price' => '6500',
                'category' => 'dog',
                'Short_Description' => 'helthey',
                'Other_Information' => 'medium size',
                'detail' => 'brwown eyes and fluufy',
                'other_images' => 'frontend/img/new/ricky.jpg',
                'image' => 'frontend/img/new/ricky.jpg',
                'created_at' => now(),
                'updated_at' => now(),
    
            ],
            [
                'pet_name' => 'Toby',
                'user_id' => '2',
                'age' => '1.2',
                'price' => '9700',
                'category' => 'cat',
                'Short_Description' => 'shorty',
                'Other_Information' => 'cute and helthey',
                'detail' => 'black eyes , long tail and really playfull',
                'other_images' => 'frontend/img/new/cat3.jpg',
                'image' => 'frontend/img/new/cat3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
    
            ],
            [
                'pet_name' => 'Bear ',
                'user_id' => '3',
                'age' => '5',
                'price' => '10000',
                'category' => 'dog',
                'Short_Description' => 'healthy',
                'Other_Information' => 'good and active color',
                'detail' => 'really playfull , active . brown color lobg leg ',
                'other_images' => '',
                'image' => '',
                'created_at' => now(),
                'updated_at' => now(),
    
            ],


        ]);


    }
}

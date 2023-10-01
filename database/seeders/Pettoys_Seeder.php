<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pet_toys;

class Pettoys_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pet_toys')->insert([

            [
                'toy_name' => 'Cat Clumping Litter',
                'toy_price' => 1100,
                'toy_image' => 'frontend/img/new/toys/soft_toys.avif',
                'toy_detail' => 'good material and small to medium size.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}

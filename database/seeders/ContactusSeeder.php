<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contactus;
use Faker\Factory as faker;

class ContactusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();
        $customer = new Contactus;
        $customer->name = $faker->name;
        $customer->email = $faker->email;
        $customer->subject = "testing";
        $customer->message = "this is useing seeder";
        $customer->save();
        
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet_Product extends Model
{
    use HasFactory;

    protected $table = "pet_product";

    protected $fillable = [
        'product_name','product_price','product_image','product_detail',
    ];

}

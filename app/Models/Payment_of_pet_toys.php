<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_of_pet_toys extends Model
{
    use HasFactory;

    protected $table="Payment_of_pet_toys";

    protected $fillable = [
        'Product_id','user_id','Product_name','Total_paid_price','Razorpay_Payment_id','payment_done'
    ];
}

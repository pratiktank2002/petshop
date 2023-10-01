<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_of_petproduct extends Model
{
    use HasFactory;

    protected $table = "Payment_of_petproduct";

    protected $fillable = [
        'Product_id','Product_name','Order_id','Razorpay_Payment_id','payment_done'
    ];

}

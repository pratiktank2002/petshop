<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table= "cart";

    protected $fillable = [
        'Product_id','user_id','quantity','product_name','product_price','product_image','product_detail',
    ];

    //relation with product table
    public function product()
    {
        return $this->belongsTo(Product::class,'Product_id' ,'id');
    }

    //-----relation with pet table 
    public function pet()
    {
        return $this->belongsTo(Product::class,'Pet_id' ,'id');
    }

    public function toys()
    {
        return $this->belongsTo(Pet_toys::class, 'product_id' , 'id');
    }

}

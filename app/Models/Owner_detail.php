<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class owner_detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_name','email','phone_number','address_1','address_2',
        'pincode', 'state','city','country'
    ];

    protected $table = "owner_detail";

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

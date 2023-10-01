<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'pet_name','age','price','category','Short_Description','Other_Information','detail', 'image','other_images'
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id' ,'id');
    }
    
}

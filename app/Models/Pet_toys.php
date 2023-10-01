<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet_toys extends Model
{
    use HasFactory;

    protected $table = "pet_toys";

    protected $fillable = [
        'toy_name','toy_price','toy_image','toy_detail',
    ];

    //relation to user table
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id' , 'id');
    }
}

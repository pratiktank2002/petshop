<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logindetail extends Model
{
    use HasFactory;

    protected $table = "logindetail";
    protected $timestamp = false;

    protected $guarded = [];
}

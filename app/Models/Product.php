<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    // fillable property to tell laravel what columns are mass assignable
    protected $fillable = [
        "name",
        "description",
        "price",
    ];
}

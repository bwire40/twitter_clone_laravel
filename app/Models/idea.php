<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class idea extends Model
{


    use HasFactory;


    // guarded does not allow mass assignment

    // mass assign these fileds
    protected $fillable = [
        "user_id",
        "content",
        "likes",
    ];


    // create a relationship between the twit and comment
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

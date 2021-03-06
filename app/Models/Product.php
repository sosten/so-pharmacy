<?php

namespace App\Models;
use App\User;
use App\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongTo(User::class);
    }

    public function categories(){
        return $this->hasMany(Category::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    use HasFactory;
    
    public function categories(){
        return $this->belongsTo(Product::class);
    }
}

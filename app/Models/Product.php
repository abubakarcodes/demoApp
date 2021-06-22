<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function categories(){
        return $this->belongsToMany(Category::class , 'category_product', 'product_id' , 'category_id');
    }

    public function sizes(){
        return $this->belongsToMany(Size::class , 'product_size', 'product_id' , 'size_id');
    }
}

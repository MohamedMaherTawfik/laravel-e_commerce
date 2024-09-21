<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'name', 'description', 'image', 'price', 'discount_price', 'category_id'
    ];

    protected $table = 'products';

    public function categorey(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function productDetail(){
        return $this->hasMany(productDetail::class,'product_id');
    }
}

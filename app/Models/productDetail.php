<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productDetail extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'product_id', 'color', 'color_quantity', 'size', 'size_quantity', 'discount', 'status'];
    protected $table = 'product_detail';

    public function product(){
        return $this->belongsTo(Product::class);
    }
}

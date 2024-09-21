<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderDetail extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'order_id', 'product_detail_id', 'quantity', 'price'];
    protected $table='order_detail';

    public function order(){
        return $this->belongsTo(order::class,);
    }
}

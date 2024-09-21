<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'user_id', 'total', 'address', 'city', 'name', 'phone'
    ];
    protected $table='order';

    public function user(){
        return $this->belongsTo(User::class);
    }
}

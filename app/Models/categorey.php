<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorey extends Model
{
    use HasFactory;
    protected $table = 'categorey';
    protected $fillable = ['name','image','parent_id'];
    
    public function child(){
        return $this->hasMany(categorey::class,'parent_id');
    }

    public function product(){
        return $this->hasMany(product::class,'category_id');
    }
}

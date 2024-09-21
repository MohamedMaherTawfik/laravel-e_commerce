<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userAddress extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'user_id', 'address', 'name', 'surname', 'phone', 'email', 'country',];
    protected $table = 'user_details';

    public function user(){
        return $this->belongsTo(User::class);
    }
}

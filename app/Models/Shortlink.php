<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shortlink extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['product_id','user_id'];

    function product(){
        return $this->hasOne(Product::class,'id','product_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code',
        'name',
        'image',
        'quantity',
        'category_id',
        'buy_price',
        'sell_price',
        'description',
        'created_by'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->hasOne(Category::class);
    }
}

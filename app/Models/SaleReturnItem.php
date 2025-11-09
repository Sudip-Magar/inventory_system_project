<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleReturnItem extends Model
{
     protected $fillable = [
        'sale_return_id',
        'product_id',
        'quantity',
        'cost_price',
        'subTotal',
        'disount_amt',
        'return_reason',
        'created_by',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function saleReturn(){
        return $this->belongsTo(SaleReturn::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}

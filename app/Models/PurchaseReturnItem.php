<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseReturnItem extends Model
{
    protected $fillable = [
        'purhchase_return_id',
        'product_id',
        'quantity',
        'cost_price',
        'subTotal',
        'disount_amt',
        'return_reason',
        'created_by',
    ];

    public function purhchaseReturn()
    {
        return $this->belongsTo(PurchaseReturn::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}

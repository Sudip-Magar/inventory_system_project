<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseReturn extends Model
{
     protected $fillable = [
        'purchase_id',
        'return_reason',
        'total_amount',
        'total_quantity',
        'total_discount_amt',
        'total_paid_amount',
        'total_due_amount',
        'status',
        'payment_status',
        'payment_method',
        'created_by',
    ];

    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }

    public function purchaseReturnItems()
    {
        return $this->hasMany(PurchaseReturnItem::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}

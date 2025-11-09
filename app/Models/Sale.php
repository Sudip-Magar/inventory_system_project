<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
     protected $fillable =[
        'customer_id',
        'total_amount',
        'quantity',
        'sales_date',
        'expected_date',
        'status',
        'notes',
        'payment_status',
        'payment_method',
        'total_received_amount',
        'total_due_amount',
        'total_discount_amt',
        'created_by',

    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function salesItems(){
        return $this->hasMany(SaleItem::class);
    }
    
    public function SalesReturns(){
        return $this->hasMany(SaleReturn::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}

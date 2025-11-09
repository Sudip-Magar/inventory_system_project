<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'vendor_id',
        'total_amount',
        'total_quantity',
        'order_date',
        'expected_date',
        'total_discount_amt',
        'status',
        'payment_status',
        'payment_method',
        'notes',
        'total_paid_amount',
        'total_due_amount',
        'created_by',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function vendero(){
        $this->belongsTo(Vendor::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = [
        'code',
        'name',
        'sign',
        'rate',
        'is_item_wise',
        'created_by'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

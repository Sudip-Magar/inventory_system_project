<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'image',
        'email',
        'address',
        'phone',
        'created_by',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

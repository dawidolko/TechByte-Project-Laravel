<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $table = 'sale';
    public $timestamps = false;
   
    protected $fillable = [
        'DISCOUNT_AMOUNT', 'START_DATE', 'END_DATE'
    ];

    /*
     * The other models expose columns under lowercase names, so a view reaching
     * for `$sale->discount_amount` got null instead of the amount.
     */
    public function getDiscountAmountAttribute()
    {
        return $this->attributes['DISCOUNT_AMOUNT'] ?? null;
    }

    public function getStartDateAttribute()
    {
        return $this->attributes['START_DATE'] ?? null;
    }

    public function getEndDateAttribute()
    {
        return $this->attributes['END_DATE'] ?? null;
    }

    public function product()
    {
        return $this->hasMany(Products::class);
    }
}


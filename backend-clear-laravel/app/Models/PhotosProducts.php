<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotosProducts extends Model
{
    use HasFactory;
    protected $table = 'photos_products';
    public $timestamps = false;
   
    protected $fillable = ['PRODUCTS_ID', 'PATH'];

    // Accessor for lowercase field name
    public function getPathAttribute()
    {
        return $this->attributes['PATH'] ?? null;
    }

    public function product()
    {
        return $this->belongsTo(Products::class, 'PRODUCTS_ID');
    }
}

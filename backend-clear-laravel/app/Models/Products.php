<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';
    public $timestamps = false;
    public $incrementing = true;
    protected $fillable = ['NAME', 'PRICE', 'QUANTITIES_AVAILABLE', 'SALE_ID', 'OLD_PRICE', 'DESCRIPTION'];

    // Accessors for lowercase field names
    public function getNameAttribute()
    {
        return $this->attributes['NAME'] ?? null;
    }

    public function getPriceAttribute()
    {
        return $this->attributes['PRICE'] ?? null;
    }

    public function getOldPriceAttribute()
    {
        return $this->attributes['OLD_PRICE'] ?? null;
    }

    public function getDescriptionAttribute()
    {
        return $this->attributes['DESCRIPTION'] ?? null;
    }

    public function getQuantitiesAvailableAttribute()
    {
        return $this->attributes['QUANTITIES_AVAILABLE'] ?? null;
    }

    public function opinions()
    {
        return $this->hasMany(Opinions::class);
    }

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }

    public function products()
    {
        return $this->belongsToMany(Orders::class, 'order_product', 'PRODUCT_ID', 'ORDER_ID')
                    ->withPivot('QUANTITY');
    }

    public function specifications()
    {
        return $this->hasMany(Specifications::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'products_categories', 'products_id', 'category_id');
    }

    public function photosProducts()
    {
        return $this->hasMany(PhotosProducts::class, 'PRODUCTS_ID');
    }

    public function productsCategories()
    {
        return $this->belongsToMany(Categories::class, 'products_categories', 'PRODUCTS_ID', 'CATEGORY_ID');
    }

    public function computerCategories()
    {
        return $this->productsCategories()->whereIn('CATEGORY_ID', [1, 2, 3]);
    }

    public function laptopCategories()
    {
        return $this->productsCategories()->whereIn('CATEGORY_ID', [13, 14, 15]);
    }

    public function caseCategories()
    {
        return $this->productsCategories()->where('CATEGORY_ID', 4);
    }

    public function coolingCategories()
    {
        return $this->productsCategories()->where('CATEGORY_ID', 5);
    }

    public function diskCategories()
    {
        return $this->productsCategories()->where('CATEGORY_ID', 6);
    }

    public function fanCategories()
    {
        return $this->productsCategories()->where('CATEGORY_ID', 7);
    }

    public function graphicsCategories()
    {
        return $this->productsCategories()->where('CATEGORY_ID', 8);
    }

    public function memoryRamCategories()
    {
        return $this->productsCategories()->where('CATEGORY_ID', 9);
    }

    public function motherboardCategories()
    {
        return $this->productsCategories()->where('CATEGORY_ID', 10);
    }

    public function powerSupplyCategories()
    {
        return $this->productsCategories()->where('CATEGORY_ID', 11);
    }

    public function processorCategories()
    {
        return $this->productsCategories()->where('CATEGORY_ID', 12);
    }

    public function gamingComputers() 
    {
        return $this->productsCategories()->where('CATEGORY_ID', 1);
    }

    public function learningComputers() 
    {
        return $this->productsCategories()->where('CATEGORY_ID', 2);
    }

    public function officeComputers() 
    {
        return $this->productsCategories()->where('CATEGORY_ID', 3);
    }

    public function gamingLaptops() 
    {
        return $this->productsCategories()->where('CATEGORY_ID', 13);
    }

    public function learningLaptops() 
    {
        return $this->productsCategories()->where('CATEGORY_ID', 14);
    }

    public function officeLaptops()
    {
        return $this->productsCategories()->where('CATEGORY_ID', 15);
    }
}

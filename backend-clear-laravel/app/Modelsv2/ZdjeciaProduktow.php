<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZdjeciaProduktow extends Model
{
    use HasFactory;
    protected $table = 'zdjecia_produktow';
    protected $primaryKey = 'ID_ZDJECIA';
    
    /*
     * ID_ZDJECIA is the auto-incrementing primary key, so it does not need to be
     * in fillable
     */
    protected $fillable = ['ID_PRODUKTU', 'SCIEZKA'];

    public function produkt()
    {
        return $this->belongsTo(Produkty::class, 'ID_PRODUKTU');
    }

    /*
     * Product images have no timestamps of their own, unless you decide otherwise
     */
    public $timestamps = false;
}

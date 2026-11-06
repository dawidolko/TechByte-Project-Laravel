<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specyfikacje extends Model
{
    use HasFactory;
    protected $table = 'specyfikacje';
    /*
     * Exact names from the ERD
     */
    protected $fillable = ['ID_PRODUKTU', 'NAZWA_PARAMETRU', 'SPECYFIKACJA'];

    public function produkt()
    {
        return $this->belongsTo(Produkty::class, 'ID_PRODUKTU');
    }
}

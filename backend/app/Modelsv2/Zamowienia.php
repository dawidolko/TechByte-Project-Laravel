<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zamowienia extends Model
{
    use HasFactory;
    protected $table = 'zamowienia';
    /*
     * Exact names from the ERD
     */
    protected $fillable = ['ID_KLIENTA', 'ID_PRACOWNIKA', 'DATA_ZAMOWIENIA', 'STATUS'];

    public function klient()
    {
        return $this->belongsTo(Klienci::class, 'ID_KLIENTA');
    }

    public function pracownik()
    {
        return $this->belongsTo(Pracownicy::class, 'ID_PRACOWNIKA');
    }

    public function produkty()
    {
        return $this->belongsToMany(Produkty::class, 'zamowienia_produkty', 'ID_ZAMOWIENIA', 'ID_PRODUKTU');
    }

    public function przesylki()
    {
        return $this->hasOne(Przesylki::class, 'ID_ZAMOWIENIA');
    }

    public function reklamacje()
    {
        return $this->hasMany(Reklamacje::class, 'ID_ZAMOWIENIA');
    }
}

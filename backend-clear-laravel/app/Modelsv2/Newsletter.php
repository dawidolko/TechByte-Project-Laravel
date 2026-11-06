<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Newsletter extends Model
{
    use HasFactory;
    protected $table = 'newsletter';
    protected $primaryKey = 'ID_SUBSKRYPCJI';

    protected $fillable = [
        'ID_KLIENTA', 'POCZATEK_SUBSKRYPCJI', 'STATUS_SUBSKRYPCJI'
    ];

    public $timestamps = false;

    public function klient()
    {
        return $this->belongsTo(Klienci::class, 'ID_KLIENTA');
    }
}

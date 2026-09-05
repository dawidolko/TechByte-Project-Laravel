<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customers extends Authenticatable
{
    use Notifiable, HasFactory;

    protected $table = 'customers';
    public $timestamps = false;

    protected $hidden = ['PASSWORD'];

    /**
     * Kolumna z hasłem nazywa się PASSWORD, nie password.
     *
     * Laravel domyślnie czyta `$this->password`, którego w tej tabeli nie ma —
     * porównanie skrótu dostawało null i `Auth::attempt()` zawsze zwracał
     * false. Logowanie było przez to niemożliwe niezależnie od poprawności
     * danych.
     */
    public function getAuthPassword(): string
    {
        return $this->attributes['PASSWORD'] ?? '';
    }

    protected $fillable = [
        'NAME', 'LAST_NAME', 'DELIVERY_ADDRESS', 'PHONE_NUMBER', 'EMAIL', 'PASSWORD'
    ];

    protected $rememberTokenName = null; 

    public function orders() {
        return $this->hasMany(Orders::class, 'customers_id', 'id');
    }

    public function opinions()
    {
        return $this->hasMany(Opinions::class);
    }

    public function newsletter()
    {
        return $this->hasOne(Newsletter::class, 'CUSTOMERS_ID');
    }

    public function getFullNameAttribute()
    {
        return $this->NAME . ' ' . $this->LAST_NAME;
    }
}

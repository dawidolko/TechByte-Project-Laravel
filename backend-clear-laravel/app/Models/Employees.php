<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employees extends Authenticatable
{
    use HasFactory;

    protected $table = 'employees';
    public $timestamps = false;

    protected $fillable = [
        'NAME', 'LAST_NAME', 'JOB_POSITION', 'EMAIL', 'PHONE_NUMBER', 'PASSWORD'
    ];
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


    public function orders()
    {
        return $this->hasMany(Orders::class);
    }

    /*
     * Akcesory czytaja kolumny WIELKIMI literami — tak wygladaja w tej bazie.
     * Wczesniej siegaly po klucze malymi ('name', 'last_name'), ktorych
     * w atrybutach nie ma, wiec kazdy odczyt konczyl sie "Undefined array key"
     * i cala strona wracala z bledem 500 zaraz po zalogowaniu pracownika.
     */
    public function getNameAttribute($value)
    {
        return $this->attributes['NAME'] ?? null;
    }

    public function getLastNameAttribute($value)
    {
        return $this->attributes['LAST_NAME'] ?? null;
    }


    public function getJobPositionAttribute($value)
    {
        return $this->attributes['JOB_POSITION'] ?? null;
    }



    /**
     * Odczyt atrybutu z tolerancją na wielkość liter w nazwie kolumny.
     *
     * Schemat tej bazy trzyma kolumny wielkimi literami (NAME, LAST_NAME,
     * EMAIL), a widoki i kod Laravela sięgają po nie małymi (`$user->name`).
     * Bez tego mostka każdy taki odczyt kończył się "Undefined array key" i
     * wywracał całą stronę błędem 500 — widoczne po zalogowaniu, bo dopiero
     * wtedy nawigacja pokazuje imię użytkownika.
     *
     * Mapowanie działa tylko wtedy, gdy atrybut o podanej nazwie nie istnieje,
     * więc nie przesłania niczego, co model definiuje sam.
     */
    public function getAttribute($key)
    {
        $wartosc = parent::getAttribute($key);

        if ($wartosc === null && is_string($key)) {
            $wielkimi = strtoupper($key);
            if ($wielkimi !== $key && array_key_exists($wielkimi, $this->attributes)) {
                return $this->attributes[$wielkimi];
            }
        }

        return $wartosc;
    }
}

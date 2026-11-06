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
     * The password column is named PASSWORD, not password.
     *
     * By default Laravel reads `$this->password`, which does not exist in this
     * table - the hash comparison got null and `Auth::attempt()` always returned
     * false. Login was therefore impossible regardless of whether the credentials
     * were correct.
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
     * The accessors read columns in UPPERCASE - that is how they look in this
     * database. Previously they reached for lowercase keys ('name', 'last_name'),
     * which are not in the attributes, so every read ended with "Undefined array
     * key" and the whole page returned a 500 error right after an employee logged
     * in.
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
     * Attribute read that tolerates letter case in the column name.
     *
     * This database's schema keeps columns in uppercase (NAME, LAST_NAME, EMAIL),
     * while views and Laravel code access them in lowercase (`$user->name`).
     * Without this bridge every such read ended with "Undefined array key" and
     * brought the whole page down with a 500 error - visible after login, because
     * only then does the navigation show the user's name.
     *
     * The mapping only applies when no attribute with the given name exists, so it
     * does not shadow anything the model defines itself.
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

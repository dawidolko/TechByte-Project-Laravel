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

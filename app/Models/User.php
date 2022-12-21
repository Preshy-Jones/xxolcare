<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    protected $connection = "mysql";
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Standard_home_cleaning()
    {
        return $this->hasMany(Standard_home_cleaning::class);
    }
    public function Care_givers()
    {
        return $this->hasMany(Care_givers::class);
    }
    public function Deep_cleaning()
    {
        return $this->hasMany(Deep_cleaning::class);
    }
    public function Office_cleaning()
    {
        return $this->hasMany(Office_cleaning::class);
    }
    public function Salon()
    {
        return $this->hasMany(Salon::class);
    }

    public function Spa()
    {
        return $this->hasMany(Spa::class);
    }
    public function Relocation()
    {
        return $this->hasMany(Relocation::class);
    }
}

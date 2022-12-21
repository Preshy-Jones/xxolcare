<?php

namespace App\Models;

use App\Models\Care_givers;
use App\Models\Deep_cleaning;
use App\Models\Office_cleaning;
use App\Models\Relocation;
use App\Models\Salon;
use App\Models\Spa;
use App\Models\Standard_home_cleaning;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xxolstar extends Model
{
    use HasFactory;
    protected $fillable = ['location', 'specialization'];
//Tell laravel to fetch text values and set them as arrays
    protected $casts = [
        'location' => 'array',
        'specialization' => 'array',
    ];
    protected $connection = "mysql";
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

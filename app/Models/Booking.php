<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{

    protected $table = 'bookings';

    public $primaryKey = 'id';

    public $timestamps = true;

}

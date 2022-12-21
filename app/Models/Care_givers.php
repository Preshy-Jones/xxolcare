<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Care_givers extends Model
{

    protected $table = 'care_givers';
    protected $connection = "mysql";
    public $primaryKey = 'id';

    public $timestamps = true;
    use HasFactory;
}

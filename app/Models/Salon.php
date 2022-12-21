<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    protected $table = 'salons';

    public $primaryKey = 'id';
    protected $connection = "mysql";
    public $timestamps = true;
    use HasFactory;
}

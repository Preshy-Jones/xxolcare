<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spa extends Model
{
    protected $table = 'spas';

    public $primaryKey = 'id';
    protected $connection = "mysql";
    public $timestamps = true;
    use HasFactory;
}

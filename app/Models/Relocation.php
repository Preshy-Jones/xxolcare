<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relocation extends Model
{
    protected $table = 'relocations';
    protected $connection = "mysql";
    public $primaryKey = 'id';

    public $timestamps = true;
    use HasFactory;
}

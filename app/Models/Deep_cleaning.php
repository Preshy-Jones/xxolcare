<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deep_cleaning extends Model
{
    protected $table = 'deep_cleanings';
    protected $connection = "mysql";
    public $primaryKey = 'id';

    public $timestamps = true;
    use HasFactory;
}

<?php

namespace App\Models;

use App\Models\Xxolstar as XxolStar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standard_home_cleaning extends Model
{
    protected $table = 'standard_home_cleaning';
    protected $connection = "mysql";
    public $primaryKey = 'id';

    public $timestamps = true;
    use HasFactory;
    public function xxolstar()
    {
        return $this->belongsTo(XxolStar::class);
    }
}

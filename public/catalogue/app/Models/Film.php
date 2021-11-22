<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Eloquent;

class Film extends Eloquent
{
    protected $connection = 'mysql';
    protected $table = 'films';
    protected $fillable = ['name','category_id','director','path'];

    public $timestamps=false;

    use HasFactory;
}

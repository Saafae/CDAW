<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Eloquent;

class category extends Eloquent
{
    protected $connection = 'mysql';
    protected $table = 'categories';


    
    use HasFactory;
}

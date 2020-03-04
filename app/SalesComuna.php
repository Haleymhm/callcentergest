<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesComuna extends Model
{
    protected $table = 'sales_comuna';
    protected $fillable = [ 'description','idcity' ];
}


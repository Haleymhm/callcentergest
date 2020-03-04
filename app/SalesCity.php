<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesCity extends Model
{
    protected $table = 'sales_city';

    protected $fillable = [   'description','idregion'  ];
}

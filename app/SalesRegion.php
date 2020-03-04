<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesRegion extends Model
{
    protected $table = 'sales_cregion';
    protected $fillable = [ 'description' ];
}

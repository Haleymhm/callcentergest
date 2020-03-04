<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'sales_branch';
    protected $fillable = [ 'cod_sucursal',
                            'forma_entrega',
                            'destino_entrega',
                            'region_cac',
                            'status'
    ];
}

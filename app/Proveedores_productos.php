<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedores_Productos extends Model
{
    protected $table = 'proveedores_productos';

    protected $fillable=
    [
        'proveedor_id','producto_id',
    ];

    protected $hidden = [
        'id','created_at','updated_at',
    ];

    public function detalles_compras()
    {
        return $this->hasMany('App\Detalles_Compras');
    }

    public function proveedores()
    {
        return $this->BelongsTo('App\Proveedor','proveedor_id');
    }

    public function productos()
    {
        return $this->BelongsTo('App\Producto','producto_id');
    }
}

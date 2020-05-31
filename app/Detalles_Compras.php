<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalles_Compras extends Model
{
    protected $table = 'detalles_compras';

    protected $fillable =
    [
        'compra_id','proveedor_producto_id','cantidad','valor_unitario'
    ];

    protected $hidden = [
        'id','created_at','updated_at',
    ];

    public function compra(){
        return $this->BelongsTo('App\Compra','compra_id');
    }
    
    public function proveedor_producto(){
        return $this->BelongsTo('App\Proveedores_Productos','proveedor_producto_id');
    }
}

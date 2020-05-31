<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $fillable = [
        'id','nombre','direccion','contacto','telefono','pagina_web',
    ];

    protected $hidden = [
        'created_at','updated_at',
    ];

    public function compras(){
        return $this->hasMany('App\Compra');
    }

    public function productos()
    {
        return $this->belongsToMany('App\Producto', 'proveedores_productos');
    }
}
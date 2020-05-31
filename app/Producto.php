<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre','descripcion',
    ];

    protected $hidden = [
        'id','created_at','updated_at','categoria_id',
    ];

    public function categoria(){
        return $this->belongsTo('App\Categoria');
    }

    public function proveedores()
    {
        return $this->belongsToMany('App\Proveedor', 'proveedores_productos');
    }
}

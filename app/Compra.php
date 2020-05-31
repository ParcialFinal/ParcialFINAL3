<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = [
        'id','fecha','descripcion',
    ];

    protected $hidden = [
        'created_at','updated_at','proveedor_id',
    ];

    public function proveedor(){
        return $this->BelongsTo('App\Proveedor', 'proveedor_id');
    }

    public function detalles_compras(){
        return $this->hasMany('App\Detalles_Compras');
    }
}

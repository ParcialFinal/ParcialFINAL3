<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'id', 'name'
    ];

    protected $hidden = [
        'id','created_at','updated_at'
    ];

    public function productos(){
        return $this->hasMany('App\Producto');
    }
}

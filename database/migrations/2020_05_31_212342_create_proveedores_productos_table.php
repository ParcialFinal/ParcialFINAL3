<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores_productos', function (Blueprint $table) {
            $table->increments("id");
            $table->integer('proveedor_id')->unsigned();
            $table->foreign('proveedor_id')->references('id')->on('proveedors');
            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedores_productos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_compras', function (Blueprint $table) {
            $table->increments("id");
            $table->integer('compra_id')->unsigned();
            $table->foreign('compra_id')->references('id')->on('compras');
            $table->integer('proveedor_producto_id')->unsigned();
            $table->foreign('proveedor_producto_id')->references('id')->on('proveedores_productos');
            $table->integer('cantidad');
            $table->double('valor_unitario');
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
        Schema::dropIfExists('detalles_compras');
    }
}

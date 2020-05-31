<?php
use App\Compra;
use App\Proveedores_Productos;
use App\Detalles_Compras;
use Illuminate\Database\Seeder;

class ComprasDetalleCompras extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detalle_compra = new Detalles_Compras;
        $detalle_compra->compra_id =Compra::inRandomOrder()->value('id');
        $detalle_compra->proveedor_producto_id =Proveedores_Productos::inRandomOrder()->value('id');
        $detalle_compra->cantidad=2;
        $detalle_compra->valor_unitario=78.98;
        $detalle_compra->save();
    }
}

<?php
use App\Proveedor;
use App\Compra;
use Illuminate\Database\Seeder;

class ProveedoreCompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proveedores=factory(Proveedor::class,2)->create()
        ->each(function($proveedor){
            $compra=factory(Compra::class)->make();
            $proveedor->compras()->save($compra);
        });
    }
}

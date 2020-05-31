<?php
use App\Proveedor;
use Illuminate\Database\Seeder;

class ProveedoresProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $venta = Proveedor::find(9);
        $venta-> productos()->attach([1,2]);
    }
}

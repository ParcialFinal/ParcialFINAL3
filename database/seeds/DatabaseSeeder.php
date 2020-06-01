<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriaProductoSeeder::class);
        $this->call(ProveedoreCompraSeeder::class);
        $this->call(ProveedoresProductosSeeder::class);
        $this->call(ComprasDetalleCompras::class);
        
        
    }
}

<?php
use App\Categoria;
use App\Producto;
use Illuminate\Database\Seeder;
class CategoriaProductoSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias=factory(Categoria::class,2)->create()
        ->each(function($categoria){
            $producto=factory(Producto::class)->make();
            $categoria->productos()->save($producto);
        });
    }
}


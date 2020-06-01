<?php

namespace App\Http\Controllers;
use App\Proveedores_Productos;
use App\Producto;
use App\Proveedor;
use Illuminate\Http\Request;

class ProveedorProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores_productos=Proveedores_Productos::with('proveedores','productos')->get();
        return view('Proveedores_Productos.index' ,['proveedores_productos'=>$proveedores_productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores_productos=Proveedores_Productos::with('proveedores','productos')->get();
        $productos=Producto::all();
        $proveedores=Proveedor::all();
        return view('Proveedores_Productos.create',['proveedores'=>$proveedores],['productos'=>$productos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedores_productos = new Proveedores_Productos;
        $proveedores_productos->proveedor_id = $request->input('proveedor_id');
        $proveedores_productos->producto_id = $request->input('producto_id');
        $proveedores_productos->save();
        return redirect()->route('proveedor_producto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedores_productos=Proveedores_Productos::find($id);
        $productos=Producto::all();
        $proveedores=Proveedor::all();
        
        return view('Proveedores_Productos.edit',['proveedores'=>$proveedores],['productos'=>$productos])->with('proveedores_productos',$proveedores_productos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proveedores_productos=Proveedores_Productos::find($id);
        $proveedores_productos->proveedor_id = $request->proveedor_id;
        $proveedores_productos->producto_id = $request->producto_id;
        $proveedores_productos->Update();
        return redirect()->route('proveedor_producto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor_producto=Proveedores_Productos::find($id);
        $proveedor_producto->delete();
        return redirect()->route('proveedor_producto.index');
    }
}

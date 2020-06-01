<?php

namespace App\Http\Controllers;
use App\Detalles_Compras;
use App\Proveedores_Productos;
use App\Compra;
use Illuminate\Http\Request;
use App\Proveedor;

class DetalleCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalles_compras=Detalles_Compras::with('compra','proveedor_producto')->get();
        return view('Detalles_Compras.index' ,['detalles_compras'=>$detalles_compras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalles_compras=Detalles_Compras::with('compra','proveedor_producto')->get();
        $compras=Compra::all();
        $proveedores_productos=Proveedores_Productos::all();
        return view('Detalles_Compras.create',['compras'=>$compras],['proveedores_productos'=>$proveedores_productos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detalles_compras = new Detalles_Compras;
        $detalles_compras->compra_id = $request->input('compra_id');
        $detalles_compras->proveedor_producto_id = $request->input('proveedor_producto_id');
        $detalles_compras->cantidad = $request->input('cantidad');
        $detalles_compras->valor_unitario = $request->input('valor_unitario');
        $detalles_compras->save();
        return redirect()->route('detalle_compra.index');
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
        $detalles_compras=Detalles_Compras::find($id);
        $compras=Compra::all();
        $proveedores_productos=Proveedores_Productos::all();
        
        return view('Detalles_Compras.edit',['compras'=>$compras],['proveedores_productos'=>$proveedores_productos])
        ->with('detalles_compras',$detalles_compras);
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
        $detalles_compras=Detalles_Compras::find($id);
        $detalles_compras->compra_id = $request->input('compra_id');
        $detalles_compras->proveedor_producto_id = $request->input('proveedor_producto_id');
        $detalles_compras->cantidad = $request->input('cantidad');
        $detalles_compras->valor_unitario = $request->input('valor_unitario');
        $detalles_compras->Update();
        return redirect()->route('detalle_compra.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalle_compra=Detalles_Compras::find($id);
        $detalle_compra->delete();
        return redirect()->route('detalle_compra.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compra;
use App\Proveedor;
use App\Http\Requests\CrearCompraRequest;
class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras=Compra::with('proveedor')->get();
        return view('Compra.index' ,['compras'=>$compras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compras=Compra::with('proveedor')->get();
        $proveedores=Proveedor::all();
        return view('Compra.create',['proveedores'=>$proveedores]);
        //return dd($compras);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearCompraRequest $request)
    {
        $compra = new Compra;
        $compra->fecha = $request->input('fecha');
        $compra->descripcion = $request->input('descripcion');
        $compra->proveedor_id = $request->input('proveedor_id');
        $compra->save();
        return redirect()->route('compra.index');
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
        $compra=Compra::find($id);
        $proveedores=Proveedor::all();
        return view('Compra.edit',['proveedores'=>$proveedores])->with('compra',$compra);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CrearCompraRequest $request, $id)
    {
        $compra=Compra::find($id);
        $compra->fecha = $request->fecha;
        $compra->descripcion = $request->descripcion;
        $compra->proveedor_id = $request->proveedor_id;
        $compra->Update();
        return redirect()->route('compra.index');
        //$cc=Compra::find($id)->Update($request->all());
        //return redirect()->route('compra.index');
        //return dd($compra);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $compra=Compra::find($id);
        $compra->delete();
        return redirect()->route('compra.index');
    }
}

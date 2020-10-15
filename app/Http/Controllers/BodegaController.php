<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class BodegaController extends Controller
{
    /**
     * Pagina principal de bodega, muestra una tabla con todos los productos
     *
     * @return //vista de los productos
     */
    public function index()
    {
        $hola = 0;
        $productos = Producto::all();
        return view('bodega.producto',compact('productos'));
    }

    /**
     * Vista para que el encargado de la bodega ingrese nuevos productos
     *
     * @return //formulario para crear nuevo formulario
     */
    public function create()
    {
        $productos = Producto::all();
        return view('bodega.adicionar',compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $productoNuevo = new Producto;
        $productoNuevo->nombre = $request->nombre;
        $productoNuevo->proveedor = $request->proveedor;
        $productoNuevo->fecha_garantia = $request->fecha_garantia;
        $productoNuevo->codigo = $request->codigo;
        $productoNuevo->precio = $request->precio;

        $productoNuevo->save();

        return view('bodega.create')->with('mensaje', 'Pedido realisado');
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

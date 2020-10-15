<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Proveedores;
use App\Models\Solicitar;
use App\Models\User;
use App\Models\Bodega;
use Illuminate\Http\Request;

class solicitarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Producto::all();
        $provedor = Proveedores::all();
        $bodega = Bodega::all();
        $idUser = auth()->id();
        $datosUser = User::all()->where('id', $idUser);
        return view('bodega.solicitar', compact('producto', 'provedor', 'bodega', 'datosUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $solicitar = request()->all();
        $solicitar = request()->except('_token');

        $solicitar = request()->except('_token');

        Solicitar::insert($solicitar);
        
        $producto = Producto::all();
        $provedor = Proveedores::all();
        $bodega = Bodega::all();
        $idUser = auth()->id();
        $datosUser = User::all()->where('id', $idUser);

        return back()->with('mensaje', 'se solicito el nuevo producto');
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

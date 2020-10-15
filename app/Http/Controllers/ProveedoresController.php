<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use App\Models\Empresas;

use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedores::all();
        $empresas = Empresas::all();
        return view('empresa.proveedores', compact('proveedores', 'empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = Proveedores::all();
        
        return view('empresa.proveedores', compact('proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provedor = request()->all();
        $provedor = request()->except('_token');
        Proveedores::insert($provedor);

        return back()->with('mensaje', '¡se Creo el proveedor correctamente!');
        
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
        $provedor = Proveedores::findOrFail($id);
        $empresas = Empresas::all();
        return view('empresa.editarProveedor', compact('provedor','empresas'));
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
        $provedorEditado = request()->all();
        $provedorEditado = request()->except('_token','_method');

        Proveedores::where('id', '=', $id)->update($provedorEditado);

        return back()->with('mensaje', 'Se Modifico correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provedorEditado =Proveedores::findOrFail($id);
        Proveedores::destroy($id);
        return back()->with('mensaje', 'Proveedor se elimino correctamente');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Http\Arr;


class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('ventas.index', compact('productos'));
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

        $inputValue = $request->all();

        $request->validate([
            'producto' => 'required',
        ]);

        $arrayTostring = implode(',', $request->input('producto'));


        $productos = Producto::all();

        $arrayProductos= preg_split("/[,]/",$arrayTostring);

        $i=0;
        $a=0;
        $idProducto = [];

        foreach ($arrayProductos as $keyArrayProductos) {
            foreach ($productos as $keyProductos) {
                if ($arrayProductos[$i] == $productos[$a]->id) {
                    $idProducto[$i] = $productos[$a]->nombre;
                    break;
                }
                $a=$a+1;
            }
            $i=$i+1;
            $a=0;
        }

        foreach ($idProducto as $keyProductos => $valor) {
            echo $idProducto[$keyProductos];
        }

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

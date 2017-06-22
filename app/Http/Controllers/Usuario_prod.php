<?php

namespace compra_venta\Http\Controllers;

use DB;
use Auth;
use Session;
use Illuminate\Http\Request;
use compra_venta\Producto;
use compra_venta\Http\Requests;
use compra_venta\Http\Controllers\Controller;

class Usuario_prod extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
         $producto = new Producto;

         $v = \Validator::make($request->all(), [
            
            'nombre' => 'required',
            'cantidad' => 'numeric|required',
            'precio'    => 'numeric|required',
            'descripcion' => 'required',
            'categoria' => 'required|in:Accesorios para Vehículos,Animales y Mascotas,Arte y Antigüedades,Bebés,Cámaras y Accesorios,Celulares y Telefonía,Coleccionables y Hobbies,Computación,Consolas y Videojuegos,Deportes y Fitness,Electrodomésticos,Electrónica, Audio y Video,Entradas para Eventos,Herramientas y Construcción,Hogar y Muebles,Industrias y Oficinas,Instrumentos Musicales,Juegos y Juguetes,Libros, Revistas y Comics,Música y Películas,Relojes y Joyas,Salud y Belleza,Vestuario y Calzado,Otras Categorías'
            
        ]);

         if ($v->fails())
        {
            
            Session::flash('message-error','Error en la creacion de producto');
            return redirect()->back()->withInput()->withErrors($v->errors());

        }

        $producto->rut = Auth::user()->rut;
        $producto->nombre = $request->nombre;
        $producto->cantidad = $request->cantidad;
        $producto->descripcion = $request->descripcion;
        $producto->categoria = $request->categoria;

        $producto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $productos = DB::table('productos')->get();
        return view('user_products',compact('productos'));
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

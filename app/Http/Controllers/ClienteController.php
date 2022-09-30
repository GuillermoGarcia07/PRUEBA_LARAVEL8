<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['cliente'] = Cliente::get(); //Se traen los todos los datos de la bd
        return view('cliente.index', $datos); //Se renderizan en la tabla
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create'); //Se carga el formulario
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos_cliente = request()->except('_token'); //Se obtienen los datos que vienen del formulario

        Cliente::insert($datos_cliente); //Se guardan los datos en la bd

        return view('cliente.index');   //Se redirige al index donde se muestran todos los datos
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);  //Se consulta el registro en la bd mediante el id
        return view('cliente.edit', compact('cliente')); //Se renderiza a el formulario los datos obtenidos
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $datos_cliente = request()->except('_token', '_method'); //Se obtienen los datos que vienen del formulario
        Cliente::where('id', '=', $id)->update($datos_cliente); // Se hace la actualizacion a la bd

        return redirect('cliente'); // despues que se actulizan los datos, redirigimos a al index
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::destroy($id); //Se elimina el registro
        return redirect('cliente'); //Despues que se elimina el registro, redirigimos a index
    }
}

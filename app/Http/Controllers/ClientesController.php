<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;



class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['Clientes'] = clientes::paginate(5);
        return view('clientes.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //$datosClientes = request()->all();
        $datosclientes = request()->except('_token');
        clientes::insert($datosclientes);

        return response()->json($datosclientes);
    }

    /**
     * Display the specified resource.
     */
    public function show(clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $Clientes=clientes::findOrFail($id);
        return view('clientes.edit',compact('Clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, clientes $clientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        clientes::destroy($id); 
        return redirect('clientes');
        
    }
}

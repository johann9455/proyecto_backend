<?php

namespace App\Http\Controllers;

use App\Models\vehiculos;
use Illuminate\Http\Request;

class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['Vehiculos'] = vehiculos::paginate(5);
        return view('vehiculos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('vehiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //$datosVehiculos = request()->all();
        $datosVehiculos = request()->except('_token');
        vehiculos::insert($datosVehiculos);

        return response()->json($datosVehiculos);
    }

    /**
     * Display the specified resource.
     */
    public function show(vehiculos $vehiculos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        
        $Vehiculos=vehiculos::findOrFail($id);
        return view('vehiculos.edit',compact('Vehiculos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vehiculos $vehiculos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        vehiculos::destroy($id); 
        return redirect('clientes');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\reservas;
use Illuminate\Http\Request;

class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['Reservas'] = reservas::paginate(5);
        return view('reservas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('reservas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //$datosReservas = request()->all();
        $datosReservas = request()->except('_token');
        reservas::insert($datosReservas);

        return response()->json($datosReservas);
    }

    /**
     * Display the specified resource.
     */
    public function show(reservas $reservas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        
        $Reservas=reservas::findOrFail($id);
        return view('reservas.edit',compact('Reservas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reservas $reservas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        reservas::destroy($id); 
        return redirect('reservas');
    }
}

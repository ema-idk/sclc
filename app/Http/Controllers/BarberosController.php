<?php

namespace App\Http\Controllers;

use App\Models\Barberos;
use Illuminate\Http\Request;

class BarberosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['barberos']=Barberos::paginate(5);
        return view('barberos.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barberos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosBarbero=request()->all();
        $datosBarbero=request()->except('_token');
        Barberos::insert($datosBarbero);
        return response()->json($datosBarbero);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barberos  $barberos
     * @return \Illuminate\Http\Response
     */
    public function show(Barberos $barberos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barberos  $barberos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barbero = Barberos::findOrFail($id);
        return view('barberos.edit', compact('barbero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barberos  $barberos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosBarbero=request()->except(['_token', '_method']);
        Barberos::where('id','=',$id)->update($datosBarbero);
        $barbero = Barberos::findOrFail($id);
        return view('barberos.edit', compact('barbero'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barberos  $barberos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barberos::destroy($id);
        return redirect('barberos');
    }
}

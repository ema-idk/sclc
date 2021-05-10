<?php

namespace App\Http\Controllers;

use App\Models\Barberos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        if($request->hasFile('Foto')){
            $datosBarbero['Foto']=$request->file('Foto')->store('uploads','public');
        }
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
        if($datosBarbero)

        if($request->hasFile('Foto')){
            $barbero = Barberos::findOrFail($id);
            Storage::delete(['public/', $barbero->foto]);
            $datosBarbero['Foto']=$request->file('Foto')->store('uploads','public');
        }

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

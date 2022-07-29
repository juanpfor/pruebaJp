<?php

namespace App\Http\Controllers;

use App\Models\mascota;
use App\Http\Requests\StoremascotaRequest;
use App\Http\Requests\UpdatemascotaRequest;

use function GuzzleHttp\Promise\all;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $mascotas = mascota::all();
        return $mascotas;
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
     * @param  \App\Http\Requests\StoremascotaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store( $request)
    {

        $mascotas = new mascota();

        $mascotas->nombre = $request-> nombre;
        $mascotas->photo = $request-> photo;
        $mascotas->id_raza = $request-> id_raza;
        $mascotas->id_genero = $request-> id_genero;


        $mascotas->save();

        return response()->json([
            'menssage' => 'success',
            'info'=>'mascota creada',
            'producto'=>$mascotas,
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(mascota $mascota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit(mascota $mascota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemascotaRequest  $request
     * @param  \App\Models\mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemascotaRequest $request, mascota $mascota)
    {
        $mascotas = mascota::findOrFail($request->id);

        $mascotas->nombre =$request->nombre;
        $mascotas->photo =$request->photo;
       // $mascotas->id_raza =$request->id_raza;
      //  $mascotas->id_genero =$request->id_genero;


        $mascotas->save();

        return response()->json([
            'menssage' => 'success',
            'info'=>'se actualizo su informacion',
            'producto'=>$mascotas,

        ],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy(mascota $id)
    {
        $id->delete();

        return response()->json([

            'menssage' => 'success',
            'info'=>'mascota eliminada'

        ],201);
    }
}

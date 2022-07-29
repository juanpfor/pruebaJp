<?php

namespace App\Http\Controllers;

use App\Models\raza;
use App\Http\Requests\StorerazaRequest;
use App\Http\Requests\UpdaterazaRequest;

class RazaController extends Controller
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
     * @param  \App\Http\Requests\StorerazaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorerazaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\raza  $raza
     * @return \Illuminate\Http\Response
     */
    public function show(raza $raza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\raza  $raza
     * @return \Illuminate\Http\Response
     */
    public function edit(raza $raza)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdaterazaRequest  $request
     * @param  \App\Models\raza  $raza
     * @return \Illuminate\Http\Response
     */
    public function update(UpdaterazaRequest $request, raza $raza)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\raza  $raza
     * @return \Illuminate\Http\Response
     */
    public function destroy(raza $raza)
    {
        //
    }
}

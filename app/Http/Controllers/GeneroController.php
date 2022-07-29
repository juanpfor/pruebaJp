<?php

namespace App\Http\Controllers;

use App\Models\genero;
use App\Http\Requests\StoregeneroRequest;
use App\Http\Requests\UpdategeneroRequest;

class GeneroController extends Controller
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
     * @param  \App\Http\Requests\StoregeneroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoregeneroRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function show(genero $genero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function edit(genero $genero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategeneroRequest  $request
     * @param  \App\Models\genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function update(UpdategeneroRequest $request, genero $genero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function destroy(genero $genero)
    {
        //
    }
}

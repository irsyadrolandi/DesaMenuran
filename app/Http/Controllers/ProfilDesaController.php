<?php

namespace App\Http\Controllers;

use App\Models\profilDesa;
use App\Http\Requests\StoreprofilDesaRequest;
use App\Http\Requests\UpdateprofilDesaRequest;
use App\Models\perangkatDesa;

class ProfilDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profilDesa', [
            "gambaranUmum" => profilDesa::where('id', '=', '1')->first(),
            "sejarah" =>  profilDesa::where('id', '=', '2')->first(),
            "demografi" =>  profilDesa::where('id', '=', '3')->first(),
            "visiMisi" =>  profilDesa::where('id', '=', '4')->first(),
            "images" =>  perangkatDesa::get(),
            "lembaga" =>  profilDesa::where('id', '=', '6')->first(),
        ]);
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
     * @param  \App\Http\Requests\StoreprofilDesaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreprofilDesaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\profilDesa  $profilDesa
     * @return \Illuminate\Http\Response
     */
    public function show(profilDesa $profilDesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profilDesa  $profilDesa
     * @return \Illuminate\Http\Response
     */
    public function edit(profilDesa $profilDesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprofilDesaRequest  $request
     * @param  \App\Models\profilDesa  $profilDesa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprofilDesaRequest $request, profilDesa $profilDesa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profilDesa  $profilDesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(profilDesa $profilDesa)
    {
        //
    }
}

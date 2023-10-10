<?php

namespace App\Http\Controllers;

use App\Models\kabarDesa;
use App\Http\Requests\StorekabarDesaRequest;
use App\Http\Requests\UpdatekabarDesaRequest;

class KabarDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kabarDesa',[
            // "kabarDesas" => kabarDesa::all(),
            "kabardesas" => kabarDesa::latest()->filter(request(['search', 'kategori']))->Paginate(7)->withQueryString()
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
     * @param  \App\Http\Requests\StorekabarDesaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekabarDesaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kabarDesa  $kabarDesa
     * @return \Illuminate\Http\Response
     */
    public function show(kabarDesa $slug)
    {
        // dd($slug);
        return view('singleKabarDesa', [
            "kabar" => $slug
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kabarDesa  $kabarDesa
     * @return \Illuminate\Http\Response
     */
    public function edit(kabarDesa $kabarDesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekabarDesaRequest  $request
     * @param  \App\Models\kabarDesa  $kabarDesa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekabarDesaRequest $request, kabarDesa $kabarDesa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kabarDesa  $kabarDesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(kabarDesa $kabarDesa)
    {
        //
    }
}

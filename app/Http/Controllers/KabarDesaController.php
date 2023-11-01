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
        return view('singleKabarDesa', [
            "kabar" => $slug
        ]);
    }

    public function showAllKabarDesa()
    {
            return view('dashboard.dashboardKabarDesa',[
                "title" => "Kabar Desa",
                "kabarDesas" => kabarDesa::latest()->paginate(4)
            ]);

    }

    public function showKabarDesa()
    {
            return view('dashboard.dashboardKabarDesa',[
                "title" => "Kabar Desa",
                "kabarDesas" => kabarDesa::filter(request(['search', 'kategori']))->latest()->paginate(4)
            ]);
    }

    public function showPengumumanDesa()
    {
            return view('dashboard.dashboardKabarDesa',[
                "title" => "Pengumuman",
                "kabarDesas" => kabarDesa::where('kategori', '=', '2')->latest()->paginate(4)
            ]);
    }

    public function showSingleKabarDesa(kabarDesa $slug)
    {
        // dd($slug->slug);
            return view('dashboard.dashboardSingleKabarDesa',[
                "title" => $slug->kategori,
                "purpose" => "show",
                "kabarDesa" => kabarDesa::where('slug', $slug->slug)->first()
            ]);
    }

    public function editSingleKabarDesa(kabarDesa $slug)
    {
        // dd($slug->slug);
            return view('dashboard.dashboardSingleKabarDesa',[
                "title" => "edit $slug->kategori",
                "purpose" => "edit",
                "kabarDesa" => kabarDesa::where('slug', $slug->slug)->first()
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

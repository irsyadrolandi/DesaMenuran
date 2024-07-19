<?php

namespace App\Http\Controllers;

use App\Models\profilDesa;
use Illuminate\Http\Request;
use App\Models\perangkatDesa;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreprofilDesaRequest;
use App\Http\Requests\UpdateprofilDesaRequest;

class ProfilDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('profilDesa', [
    //         "gambaranUmum" => profilDesa::where('id', '=', '1')->first(),
    //         "sejarah" =>  profilDesa::where('id', '=', '2')->first(),
    //         "demografi" =>  profilDesa::where('id', '=', '3')->first(),
    //         "visiMisi" =>  profilDesa::where('id', '=', '4')->first(),
    //         "perangkatDesa" =>  perangkatDesa::where('id','=','5')->first(),
    //         "lembaga" =>  profilDesa::where('id', '=', '6')->first(),
    //     ]);
    // }

    public function showGambaranUmum()
    {
        $gambaranUmum = profilDesa::where('id', 1)->first();
        return view('dashboard.profilDesa.dashboardGambaranUmum', compact('gambaranUmum'));
    }

    public function showSejarah()
    {
        $sejarah = profilDesa::where('id', 2)->first();
        return view('dashboard.profilDesa.dashboardSejarah', compact('sejarah'));
    }

    public function showVisiMisi()
    {
        $visiMisi = profilDesa::where('id', 4)->first();
        return view('dashboard.profilDesa.dashboardVisiMisi', compact('visiMisi'));
    }

    public function showPerangkatDesa()
    {
        $images = perangkatDesa::all();
        $profilDesa = profilDesa::all();
        return view('dashboard.profilDesa.dashboardPerangkatDesa', compact('images','profilDesa'));
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
    // public function show(profilDesa $profilDesa)
    // {
    //     if ($profilDesa->id == 5) {
    //         $images = perangkatDesa::get();
    //         return view('dashboard.profilDesa.dashboardPerangkatDesa', [
    //             "profilDesa" => $profilDesa,
    //             "images" => $images
    //         ]);
    //     } else {
    //         return view('dashboard.profilDesa.dashboardProfilDesa', [
    //             "profilDesa" => $profilDesa
    //         ]);
    //     }
    // }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profilDesa  $profilDesa
     * @return \Illuminate\Http\Response
     */
    public function edit(profilDesa $profilDesa)
    {
        return view('dashboard.profilDesa.dashboardProfilDesaEdit',["profilDesa" => $profilDesa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprofilDesaRequest  $request
     * @param  \App\Models\profilDesa  $profilDesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profilDesa $profilDesa)
    {
        $this->validate($request, [
            'body' => 'required',
            'kategori' => 'required'
        ]);
        $input['body'] = $request->body;
        $input['kategori'] = $request->kategori;
        profilDesa::where('id', $profilDesa->id)->update($input);
        return Redirect::to('/dashboard/profil-desa/'.$profilDesa->id)->with('success', 'Profil Desa berhasil diedit');
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

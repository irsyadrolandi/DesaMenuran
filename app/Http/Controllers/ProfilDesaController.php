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
        if ($profilDesa->id == '5') {
            $images = perangkatDesa::get();
            return view('dashboard.dashboardPerangkatDesa',compact('images')
        );
        } else {
            return view('dashboard.profilDesa.dashboardProfilDesa',[
                "profilDesa" => $profilDesa
        ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profilDesa  $profilDesa
     * @return \Illuminate\Http\Response
     */
    public function edit(profilDesa $profilDesa)
    {
        return view('dashboard.profilDesa.dashboardProfilDesaEdit',[
            "profilDesa" => $profilDesa
        ]);
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
        ]);
        $input['body'] = $request->body;
        // dd($input);
        profilDesa::where('id', $profilDesa->id)->update($input);
        // dd($profilDesa->id);
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

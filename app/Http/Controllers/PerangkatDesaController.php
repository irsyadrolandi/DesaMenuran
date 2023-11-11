<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\perangkatDesa;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreperangkatDesaRequest;
use App\Http\Requests\UpdateperangkatDesaRequest;

class PerangkatDesaController extends Controller
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
     * @param  \App\Http\Requests\StoreperangkatDesaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'jabatan' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->image != null) {
            $input['image'] = $request->file('image')->store('perangkat-image');
        }

        $input['nama'] = $request->nama;
        $input['jabatan'] = $request->jabatan;
// dd($input);
        perangkatDesa::create($input);
        return back()->with('success', 'Perangkat Desa Berhasil Di upload');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\perangkatDesa  $perangkatDesa
     * @return \Illuminate\Http\Response
     */
    public function show(perangkatDesa $perangkatDesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\perangkatDesa  $perangkatDesa
     * @return \Illuminate\Http\Response
     */
    public function edit(perangkatDesa $perangkatDesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateperangkatDesaRequest  $request
     * @param  \App\Models\perangkatDesa  $perangkatDesa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateperangkatDesaRequest $request, perangkatDesa $perangkatDesa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\perangkatDesa  $perangkatDesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(perangkatDesa $id)
    {
        if($id->image !== null){
            Storage::disk('public')->delete($id->image);
        }
        perangkatDesa::find($id->id)->delete();
        return back()->with('success', 'Perangkat Desa Berhasil di hapus');
    }
}

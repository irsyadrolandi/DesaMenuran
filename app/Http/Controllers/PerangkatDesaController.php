<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\perangkatDesa;
use Illuminate\Support\Facades\File;
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
            $input['image'] = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $input['image']);
        }

        $input['nama'] = $request->nama;
        $input['jabatan'] = $request->jabatan;
        perangkatDesa::create($input);
        return back()
            ->with('success', 'Image Uploaded successfully.');
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
        if(File::exists(public_path('images/'.$id->image))){
            File::delete(public_path('images/'.$id->image));
        }
        perangkatDesa::find($id->id)->delete();
        return back()
            ->with('success', 'Image removed successfully.');
    }
}

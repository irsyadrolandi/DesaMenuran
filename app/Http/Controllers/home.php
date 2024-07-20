<?php

namespace App\Http\Controllers;

use App\Models\kabarDesa;
use Illuminate\Http\Request;

class home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            $kabardesas = kabarDesa::where('title', 'LIKE', "%{$search}%")
                                    ->orWhere('body', 'LIKE', "%{$search}%")
                                    ->paginate(3);
        } else {
            $kabardesas = kabarDesa::paginate(3);
        }

        return view('welcome', compact('kabardesas'));
    }

    public function kabardesa()
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

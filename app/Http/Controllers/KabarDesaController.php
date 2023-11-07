<?php

namespace App\Http\Controllers;

use App\Models\kabarDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StorekabarDesaRequest;
use App\Http\Requests\UpdatekabarDesaRequest;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class KabarDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->kategori == 1){
            $title = "Kabar Desa";
        }
        elseif(request()->kategori == 2){
            $title = "Pengumuman Desa";
        }
        else{
            $title = "Semua Kabar Desa";
        }
        return view('dashboard.dashboardKabarDesa',[
            "title" => $title,
            "kabarDesas" => kabarDesa::latest()->filter(request(['kategori']))->paginate(4)
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
    public function show(kabarDesa $kabarDesa)
    {
        // dd($kabarDesa);
        return view('dashboard.dashboardSingleKabarDesa',[
            "title" => $kabarDesa->kategori,
            "purpose" => "show",
            "kabarDesa" => kabarDesa::where('slug', $kabarDesa->slug)->first()
        ]);
    }

    // public function showAllKabarDesa()
    // {
    //         return view('dashboard.dashboardKabarDesa',[
    //             "title" => "Kabar Desa",
    //             "kabarDesas" => kabarDesa::latest()->paginate(4)
    //         ]);

    // }

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


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kabarDesa  $kabarDesa
     * @return \Illuminate\Http\Response
     */
    public function edit(kabarDesa $kabarDesa)
    {
        return view('dashboard.dashboardSingleKabarDesa',[
            "title" => "edit $kabarDesa->kategori",
            "purpose" => "edit",
            "kabarDesa" => kabarDesa::where('slug', $kabarDesa->slug)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekabarDesaRequest  $request
     * @param  \App\Models\kabarDesa  $kabarDesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kabarDesa $kabarDesa)
    {

        dd($request->hapus_gambar_input);
        // dd(Storage::path($request->old_image));
        $rules = [
            'title' => 'required|max:255',
            'kategori' => 'required',
            'image' => 'image|file|max:1024',
            'slug' => 'required|unique:kabar_desas',
        ];
        $validatedData = $request->validate($rules);
        $validatedData['body'] = $request->body;
        if($request->file('image')){
            if($request->old_image !== null){
                Storage::disk('public')->delete($request->old_image);
            }
            $validatedData['image'] = $request->file('image')->store('kabar-image');
        }

        if ($request->hapus_gambar_input) {
            if ($request->old_image !== null ) {
                Storage::disk('public')->delete($request->old_image);
            }
            $validatedData['image'] = null;
        }


        kabarDesa::where('id', $kabarDesa->id)->update($validatedData);
        return Redirect::to('/dashboard/kabar-desa')->with('success', 'Barang berhasil diedit');
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


    public function createSlug(Request $request)
    {
        $slug = SlugService::createSlug(kabarDesa::class, 'slug', $request->title);
        return response()->json(['success' => true, 'kode' => $slug,]);
    }
}

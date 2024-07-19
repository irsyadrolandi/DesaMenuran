<?php

namespace App\Http\Controllers;

use App\Models\kabarDesa;
use Illuminate\Support\Arr;
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
        if (request()->kategori == 1) {
            $title = "Kabar Desa";
        } elseif (request()->kategori == 2) {
            $title = "Pengumuman Desa";
        } else {
            $title = "Semua Kabar Desa";
        }
        return view('dashboard.kabarDesa.dashboardKabarDesa', [
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
        return view('dashboard.kabarDesa.dashboardKabarDesaCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorekabarDesaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|max:255',
            'kategori' => 'required',
            'image' => 'image|file|max:10240',
            'slug' => 'required|unique:kabar_desas',
            'body' => 'required'
        ];
        
        $validatedData = $request->validate($rules);
        $validatedData['body'] = $request->body;
        
        if ($request->file('image')) {
            $path = $request->file('image')->store('kabar-image', 'public');
            $validatedData['image'] = basename($path);  // Hanya simpan nama file
        }

        kabarDesa::create($validatedData);
        
        return Redirect::to('/dashboard/kabar-desa')->with('success', 'Kabar Desa berhasil di Upload');
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
        if (request()->kategori == 1) {
            $title = "Kabar Desa";
        } elseif (request()->kategori == 2) {
            $title = "Pengumuman Desa";
        } else {
            $title = "Semua Kabar Desa";
        }
        return view('dashboard.kabarDesa.dashboardKabarDesaShow', [
            "title" => $title,
            "kabarDesa" => kabarDesa::where('slug', $kabarDesa->slug)->first()
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
        return view('dashboard.kabarDesa.dashboardKabarDesaEdit', [
            "title" => "edit $kabarDesa->kategori",
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
        $rules = [
            'title' => 'required|max:255',
            'kategori' => 'required',
            'image' => 'image|file|max:10240',
        ];
        if ($request->slug !== $kabarDesa->slug) {
            $rules['slug'] = 'required|unique:kabar_desas';
        }
        // dd($rules);
        $validatedData = $request->validate($rules);
        $validatedData['body'] = $request->body;
        if ($request->file('image')) {
            if ($request->old_image !== null) {
                Storage::disk('public')->delete($request->old_image);
            }
            // $validatedData['image'] = $request->file('image')->store('kabar-image');
            $path = $request->file('image')->store('kabar-image', 'public');
            $validatedData['image'] = basename($path);  // Hanya simpan nama file
        }

        if ($request->hapus_gambar_input) {
            if ($request->old_image !== null) {
                Storage::disk('public')->delete($request->old_image);
            }
            $validatedData['image'] = null;
        }
        // dd($validatedData);


        kabarDesa::where('id', $kabarDesa->id)->update($validatedData);
        return Redirect::to('/dashboard/kabar-desa')->with('success', 'Berita berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kabarDesa  $kabarDesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(kabarDesa $kabarDesa)
    {
        // dd($kabarDesa);
        if($kabarDesa->image !== null){
            Storage::disk('public')->delete($kabarDesa->image);
        }
        kabarDesa::destroy($kabarDesa->id);
        return Redirect::to(url('/dashboard/kabar-desa'))->with('success', 'Berita Berhasil dihapus');
    }


    public function createSlug(Request $request)
    {
        $slug = SlugService::createSlug(kabarDesa::class, 'slug', $request->title);
        return response()->json(['success' => true, 'kode' => $slug,]);
    }
}

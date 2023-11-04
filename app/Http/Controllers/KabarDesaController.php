<?php

namespace App\Http\Controllers;

use App\Models\kabarDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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

    public function showEditSingleKabarDesa(kabarDesa $slug)
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
    public function update(Request $request, kabarDesa $kabarDesa)
    {

        // $rules = [
        //     'title' => 'required|max:255',
        //     'kategori' => 'required',
        //     'image' => 'image|file|max:1024',
        //     'slug' => 'required|unique:kabar_desas',
        // ];

        // $input['image'] = time() . '.' . $request->image->getClientOriginalExtension();
        // $request->image->move(public_path('images'), $input['image']);
        // $validatedData = $request->validate($rules);
        // $validatedData['deskripsi'] = $request->deskripsi;
        // $validatedData['part'] = $request->part;
        // if ($request->file("image")) {
        //     if ($request->old_image !== null ) {
        //         File::delete(public_path('images/'.$request->old_image));
        //     }
        //     $validatedData["image"] = $request->file("image")->store('toPath', ['disk' => 'public']);
        // }
        // if ($request->hapus_gambar_input) {
        //     if ($request->old_image !== null && Barang::where('image', $request->old_image)->get('image')->count() == 1) {
        //         Storage::disk('public')->delete($request->old_image);
        //     }
        //     $validatedData["image"] = null;
        // }
        // if ($request->kategori != 'Bagus') {
        //     $validatedData['kategori'] = $request->kategori;
        //     $validatedData['status'] = 'Rusak';
        // } else {
        //     $validatedData['kategori'] = $request->kategori;
        //     $validatedData['status'] = 'Tersedia';
        // }


        // barang::where('id', $barang->id)->update($validatedData);
        // return redirect('/dashboard/daftar-barang/'.$kodeBarang)->with('success', 'Barang berhasil diedit');
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

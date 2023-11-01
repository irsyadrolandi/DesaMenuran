<?php

namespace App\Http\Controllers;

use App\Models\kabarDesa;
use App\Models\perangkatDesa;
use App\Models\profilDesa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index' ,[
            "profilDesas" => profilDesa::all(),
            "kabarDesas" => kabarDesa::latest()->paginate(4)
        ]);
    }


    public function show(profilDesa $id)
    {
        if ($id->id == '5') {
            $images = perangkatDesa::get();
            return view('dashboard.dashboardPerangkatDesa',compact('images')
        );
        } else {
            return view('dashboard.dashboardProfilDesa',[
                "profilDesa" => $id
        ]);
        }
    }

    // public function showKabarDesa()
    // {
    //         return view('dashboard.dashboardKabarDesa',[
    //             "title" => "Kabar Desa",
    //             "kabarDesas" => kabarDesa::latest()->filter(request(['kategori']))->paginate(4)
    //         ]);
    // }

    // public function showPengumumanDesa()
    // {
    //         return view('dashboard.dashboardKabarDesa',[
    //             "title" => "Pengumuman",
    //             "kabarDesas" => kabarDesa::where('kategori', '=', '2')->latest()->paginate(4)
    //         ]);
    // }

    // public function showSingleKabarDesa(kabarDesa $slug)
    // {
    //     // dd($slug->slug);
    //         return view('dashboard.dashboardSingleKabarDesa',[
    //             "title" => $slug->kategori,
    //             "kabarDesa" => kabarDesa::where('slug', $slug->slug)->first()
    //         ]);
    // }
}

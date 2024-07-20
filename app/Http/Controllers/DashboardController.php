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

        public function search(Request $request)
        {
            $search = $request->input('search');
            if ($search) {
                $kabarDesas = kabarDesa::where('title', 'LIKE', "%{$search}%")
                                        ->orWhere('body', 'LIKE', "%{$search}%")
                                        ->paginate(10);
            } else {
                $kabarDesas = kabarDesa::paginate(10);
            }

            return view('dashboard.searchResult', compact('kabarDesas'));
        }


    public function show(profilDesa $id)
    {

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

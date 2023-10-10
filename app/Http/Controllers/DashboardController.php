<?php

namespace App\Http\Controllers;

use App\Models\profilDesa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index' ,[
            "profilDesas" => profilDesa::all()
        ]);
    }


    public function show(profilDesa $id)
    {
        // dd($id);
        return view('dashboard.dashboardProfilDesa',[
                "profilDesa" => $id
        ]);
    }
}

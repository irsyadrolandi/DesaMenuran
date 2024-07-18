<?php

namespace App\Http\Controllers;

use App\Models\ImageGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImageGalleryController extends Controller
{
    public function index()
    {
        $images = ImageGallery::get();
        return view('dashboard.dashboardGaleri', compact('images'));
    }

    public function p_index()
    {
        $images = ImageGallery::get();
        return view('galeriDesa', compact('images'));
    }


    public function upload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);
    
        // Membuat nama file unik dengan menambahkan timestamp
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
    
        // Pindahkan file gambar ke direktori 'public/galeri'
        $request->image->move(public_path('galeri'), $imageName);
    
        // Menyimpan data gambar ke dalam database
        $input['image'] = $imageName;
        $input['title'] = $request->title;
        ImageGallery::create($input);
    
        return back()->with('success', 'Image Uploaded successfully.');
    }
    

    public function destroy(ImageGallery $id)
    {

        File::delete(public_path('images/'.$id->image));
    	ImageGallery::find($id->id)->delete();

    	return back()
    		->with('success','Image removed successfully.');

    }
}

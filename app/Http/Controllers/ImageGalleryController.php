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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);
        $input['title'] = $request->title;
        ImageGallery::create($input);
    	return back()
    		->with('success','Image Uploaded successfully.');
    }

    public function destroy(ImageGallery $id)
    {

        File::delete(public_path('images/'.$id->image));
    	ImageGallery::find($id->id)->delete();

    	return back()
    		->with('success','Image removed successfully.');

    }
}

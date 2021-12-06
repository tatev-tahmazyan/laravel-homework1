<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageUploadController extends Controller
{
    public function createForm(){
        return view('imageUpload');
    }
    public function imageUpload(Request $req){
        $req->validate(['image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',]);

        $imageModel = new Image;

        if($req->file()) {
            $imageName = time().'_'.$req->image->getClientOriginalName();
            $imagePath = $req->file('image')->storeAs('uploads', $imageName, 'public');

            $imageModel->name = time().'_'.$req->image->getClientOriginalName();
            $imageModel->file_path = '/storage/' . $imagePath;
            $imageModel->save();

            return back()
            ->with('success','Image has been uploaded.')
            ->with('image', $imageName);

        }
    }
    public function imageName(){
        $imgs = collect(Image::pluck('file_path'));
        return view('images',['img_path' => $imgs]);
    }
}

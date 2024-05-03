<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function imageview(){
        $images = Image::all();
        return view('imageview', compact('images'));
    }

    public function imageupload(Request $request){
        $size = $request->file('image')->getSize();
        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public/images/', $name);
        $image = new Image();
        $image->name = $name;
        $image->size = $size;
        $image->save();
        // dd($image);
        return redirect()->back();
    }
}

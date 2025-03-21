<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    private function uploadImage($image)
    {
        $extension = $image->getClientOriginalExtension();
        $path = 'upload/banners/';
        $filename = $path . time() . '.' . $extension;
        $image->move($path, $filename);
        return $filename;
    }
    function banner($id=1){
        $banner = Banner::findOrFail($id);
        return view('admin.banner', compact('banner'));
    }
    function UpdateBanner(Request $request, $id = 1)
    {
        $banner = Banner::findOrFail($id);
        $filename = $banner->image; 
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            
            if ($image->isValid()) {
                $filename = $this->uploadImage($image); 
            } else {
                return back()->withErrors(['image' => 'Invalid image file.']);
            }
        }
    
        $banner->update([
            'title' => $request->title,
            'image' => $filename,
        ]);
    
        return back()->with('msg', 'Banner Updated Successfully');
    }
    
}

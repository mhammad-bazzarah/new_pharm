<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class aboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = AboutUs::first();
        return view('admin.aboutUs.index',compact('about'));
    }
    public function update(Request $request, string $id)
    {
        $about = AboutUs::first();
        $request->validate([
            'description' => ['max:3000'],
            'image' => ['image','max:1500']
        ]);

        $imagePath = handleUpload('image',$about);
        $about->description = $request->description;
        $about->image = $imagePath;
        $about->save();
        toastr()->success('About Us Details Updated Successfully','Success');
        return redirect()->back();
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GallerySetting;
use Illuminate\Http\Request;

class gallerySettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = GallerySetting::first();
        return view('admin.gallery.settings',compact('setting'));
    }
    public function update(Request $request, string $id)
    {
        $setting = GallerySetting::first();
        $request->validate([
            'title' => ['max:100' ] ,
            'sub_title' =>['max:1000']
        ]);
        $setting->title = $request->title;
        $setting->sub_title = $request->sub_title;
        $setting->save();
        toastr()->success('Gallery settings updated successfully .' ,'success');
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

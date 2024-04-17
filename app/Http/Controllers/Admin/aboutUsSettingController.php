<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUsSetting;
use Illuminate\Http\Request;

class aboutUsSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = AboutUsSetting::first();
        return view('admin.aboutUs.settings',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $setting = AboutUsSetting::first();
        $request->validate([
            'title' => ['max:100' ] ,
            'sub_title' =>['max:1000']
        ]);
        $setting->title = $request->title;
        $setting->sub_title = $request->sub_title;
        $setting->save();
        toastr()->success('about-us settings updated successfully .' ,'success');
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

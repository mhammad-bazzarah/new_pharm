<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OfferSetting;
use Illuminate\Http\Request;

class offerSettingController extends Controller
{
    public function index()
    {
        $setting = OfferSetting::first();
        return view('admin.offers.settings',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $setting = OfferSetting::first();
        $request->validate([
            'title' => ['max:100' ] ,
            'sub_title' =>['max:1000']
        ]);
        $setting->title = $request->title;
        $setting->sub_title = $request->sub_title;
        $setting->save();
        toastr()->success('offers settings updated successfully .' ,'success');
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

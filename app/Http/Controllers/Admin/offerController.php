<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class offerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers = Offer::all();
        return view('admin.offers.index',compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.offers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $offer = new Offer();
        $request->validate([
            'description'=> 'required' ,
            'image' => ['required' ,'image'] ,
        ]);

        $imagePath = handleUpload('image',$offer);
        $offer->description = $request->description;
        $offer->image = $imagePath;
        $offer->save();
        toastr()->success('New Offer Added Succefully','Success');
        return redirect()->route('admin.offers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $offer = Offer::findOrFail($id);
        return view('admin.offers.edit',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $offer =  Offer::findOrFail($id);
        $request->validate([
            'description'=> 'required' ,
            'image' => ['required' ,'image'] ,
        ]);

        $imagePath = handleUpload('image',$offer);
        $offer->description = $request->description;
        $offer->image = (!Empty($imagePath)) ? $imagePath : $offer->image;
        $offer->save();
        toastr()->success(' Offer updated Succefully','Success');
        return redirect()->route('admin.offers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

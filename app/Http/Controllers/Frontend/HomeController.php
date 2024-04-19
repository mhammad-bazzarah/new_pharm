<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\AboutUsSetting;
use App\Models\Offer;
use App\Models\OfferSetting;
use App\Models\ProductSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $about_settings = AboutUsSetting::first();
        $about_us = AboutUs::first();
        $offers_settings = OfferSetting::first();
        $offers = Offer::all();
        $productSettings = ProductSetting::first();
        return view('frontend.index',compact(
            'about_settings' ,
            'about_us',
            'offers_settings',
            'offers',
            'productSettings',
            
        ));
    }
}

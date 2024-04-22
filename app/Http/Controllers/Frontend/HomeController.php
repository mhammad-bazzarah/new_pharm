<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\AboutUsSetting;
use App\Models\Offer;
use App\Models\OfferSetting;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductSetting;
use App\Models\TeamMember;
use App\Models\TeamSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $about_settings = AboutUsSetting::first();
        $about_us = AboutUs::first();
        $offers_settings = OfferSetting::first();
        $offers = Offer::all();
        $productSettings = ProductSetting::first();
        $teamSettings = TeamSetting::first();
        $teamMembers = TeamMember::all();
        return view('frontend.index',compact(
            'about_settings' ,
            'about_us',
            'offers_settings',
            'offers',
            'productSettings',
            'teamSettings',
            'teamMembers' ,

        ));

    }
    public function shop(){
        $products = Product::all();
        $cats  = ProductCategory::all();
        return view('frontend.shop' ,compact(
            'products' ,
            'cats'
        ));
    }

    public function singleProduct($id){
        $product = Product::findOrFail($id);
        $cat = $product->category_id;
        // $related_products = Product::all();
        $related_products = Product::where('category_id',$cat)->orderBy('id')->limit(3);
        return view('frontend.single-product',compact('product','related_products'));
    }
}

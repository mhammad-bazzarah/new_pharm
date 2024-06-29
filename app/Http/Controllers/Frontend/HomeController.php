<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\AboutUsSetting;
use App\Models\GalleryItem;
use App\Models\GallerySetting;
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
    public function index()
    {
        $productSettings = ProductSetting::first();
        $gallerySettings = GallerySetting::first();
        $galleryItems = GalleryItem::all();
        return view('frontend.index', compact(
            'productSettings',
            'gallerySettings',
            'galleryItems'

        ));
    }
    public function aboutUs()
    {
        $about_settings = AboutUsSetting::first();
        $about_us = AboutUs::first();
        return view('frontend.sections.about_us', compact('about_settings', 'about_us',));
    }
    public function team()
    {
        $teamSettings = TeamSetting::first();
        $teamMembers = TeamMember::all();
        return view('frontend.sections.team', compact('teamSettings', 'teamMembers',));
    }
    public function offers()
    {
        $offers_settings = OfferSetting::first();
        $offers = Offer::all();
        return view('frontend.sections.offers', compact('offers_settings', 'offers',));
    }
    public function contact(){
        return view('frontend.sections.contact');
    }
    public function shop()
    {
        $products = Product::all();
        $cats  = ProductCategory::all();
        return view('frontend.shop', compact(
            'products',
            'cats'
        ));
    }

    public function singleProduct($id)
    {
        $product = Product::findOrFail($id);
        $cat = $product->category_id;
        // $related_products = Product::all();
        $related_products = Product::where('category_id', $cat)->orderBy('id')->limit(3);
        return view('frontend.single-product', compact('product', 'related_products'));
    }
}

<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use App\Models\AboutUsSetting;
use App\Models\FooterContactInfo;
use App\Models\FooterInfo;
use App\Models\FooterSocialLink;
use App\Models\GalleryItem;
use App\Models\GallerySetting;
use App\Models\Offer;
use App\Models\OfferSetting;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductSetting;
use App\Models\TeamMember;
use App\Models\TeamSetting;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'is_admin' => 1
        ]);
        // About-us Section Factories
        AboutUsSetting::factory()->create();
        AboutUs::factory()->create();
        // Offers Section Factories
        OfferSetting::factory()->create();
        Offer::factory()->count(6)->sequence(
            ['image' => '/img/offers/offer1.jpg'],
            ['image' => '/img/offers/offer2.jpg'],
            ['image' => '/img/offers/offer3.jpg'],
            ['image' => '/img/offers/offer4.jpg'],
            ['image' => '/img/offers/offer5.jpg'],
            ['image' => '/img/offers/offer6.jpg'],
        )->create();
        // Product Section Factories
        ProductSetting::factory()->create();
        ProductCategory::factory()->count(3)->sequence(
            ['name' => 'seeds'],
            ['name' => 'tools'],
            ['name' => 'medicines'],
        )->create();
        Product::factory()->count(11)->sequence(
            ['name' => 'seed1' , 'image' => 'img/seeds/seeds1.jpg', 'price'=>'25000' ,
             'quantity' =>'56' ,'category_id'=>'1'],
            ['name' => 'seed2' , 'image' => 'img/seeds/seeds2.jpg', 'price'=>'75000' ,
                        'quantity' =>'76' ,'category_id'=>'1'],
            ['name' => 'seed3' , 'image' => 'img/seeds/seeds3.jpg', 'price'=>'65000' ,
                        'quantity' =>'12' ,'category_id'=>'1'],
            ['name' => 'seed4' , 'image' => 'img/seeds/seeds4.jpg', 'price'=>'89000' ,
                        'quantity' =>'95' ,'category_id'=>'1'],
            ['name' => 'seed5' , 'image' => 'img/seeds/seeds5.jpg', 'price'=>'120000' ,
                        'quantity' =>'34' ,'category_id'=>'1'],
            ['name' => 'tool1' , 'image' => 'img/tools/tool1.jpg', 'price'=>'250000' ,
                        'quantity' =>'43' ,'category_id'=>'2'],
            ['name' => 'tool2' , 'image' => 'img/tools/tool2.jpg', 'price'=>'560000' ,
                        'quantity' =>'13' ,'category_id'=>'2'],
            ['name' => 'tool3' , 'image' => 'img/tools/tool3.jpg', 'price'=>'135000' ,
                        'quantity' =>'50' ,'category_id'=>'2'],
            ['name' => 'tree1' , 'image' => 'img/tree.jpg', 'price'=>'51000' ,
                        'quantity' =>'12' ,'category_id'=>'3'],
            ['name' => 'tree2' , 'image' => 'img/tree4.jpg', 'price'=>'87000' ,
                        'quantity' =>'0' ,'category_id'=>'3'],
            ['name' => 'tree3' , 'image' => 'img/tree5.jpg', 'price'=>'45000' ,
                        'quantity' =>'3' ,'category_id'=>'3'],
        )->create();

        TeamSetting::factory()->create();
        TeamMember::factory()->count(3)->sequence(
            ['image' => 'img/team/bazarah.jpg' , 'name'=> 'Mhammad Bazzarah' ,'job_title' => 'Backend Developer' ,],
            ['image' => 'img/team/abbas.jpg' , 'name'=> 'Mhammad Abbas' ,'job_title' => 'Frontend Developer' ,],
            ['image' => 'img/team/lojain.jpg' , 'name'=> 'Logain Ismail' ,'job_title' => 'Frontend Developer' ,],
        )->create();

        GallerySetting::factory()->create();
        GalleryItem::factory()->count(6)->sequence(
            ['image' => 'img/gallery/gallery.jpg'],
            ['image' => 'img/gallery/gallery1.jpg'],
            ['image' => 'img/gallery/gallery2.jpg'],
            ['image' => 'img/gallery/gallery3.jpg'],
            ['image' => 'img/gallery/gallery4.jpg'],
            ['image' => 'img/gallery/gallery5.jpg'],
        )->create();

        FooterSocialLink::factory()->count(4)->sequence(
            ['icon'=> 'fa fa-twitter'],
            ['icon'=> 'fa fa-facebook'],
            ['icon'=> 'fa fa-instagram'],
            ['icon'=> 'fa fa-linkedin'],
        )
        ->create();

        FooterInfo::factory()->create();
        FooterContactInfo::factory()->create();
    }


}

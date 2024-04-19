<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use App\Models\AboutUsSetting;
use App\Models\Offer;
use App\Models\OfferSetting;
use App\Models\ProductSetting;
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
        ]);
        AboutUsSetting::factory()->create();
        AboutUs::factory()->create();
        OfferSetting::factory()->create();
        Offer::factory()->count(6)->sequence(
            ['image' => '/img/offers/offer1.jpg'],
            ['image' => '/img/offers/offer2.jpg'],
            ['image' => '/img/offers/offer3.jpg'],
            ['image' => '/img/offers/offer4.jpg'],
            ['image' => '/img/offers/offer5.jpg'],
            ['image' => '/img/offers/offer6.jpg'],
        )->create();
        ProductSetting::factory()->create();
    }

}

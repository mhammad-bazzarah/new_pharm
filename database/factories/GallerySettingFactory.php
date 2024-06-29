<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GallerySetting>
 */
class GallerySettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Gallery' ,
            'sub_title' => 'Here are some informative pictures about our website. We hope you like them and they meet your request.'
        ];
    }
}

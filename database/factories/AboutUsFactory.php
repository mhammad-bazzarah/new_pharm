<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AboutUs>
 */
class AboutUsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => '/img/letter-a-icon-png-8847.png',
            'description' =>
            '<p>
                At Agri pharm Pharmacy, we are dedicated to providing high-quality
                natural remedies and products to promote health and well-being.
                Our pharmacy specializes in herbal medicines, organic supplements,
                and natural skincare products sourced from sustainable and environmentally
                friendly sources. We believe in the power of nature to heal and nurture, and
                our team of experienced pharmacists and herbalists are committed to helping our
                customers achieve optimal health through safe
            </p>
            <ul>
                <li><i class="ion-android-checkmark-circle"></i> "We have the best quality and prices."</li>
                <li><i class="ion-android-checkmark-circle"></i> "We have years of experience in this field.".
                </li>
                <li><i class="ion-android-checkmark-circle"></i> "You have chosen the best."</li>
            </ul>'
        ];
    }
}

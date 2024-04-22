<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamMember>
 */
class TeamMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => 'img/team/avatar.png' ,
            'name'=> fake()->name(),
            'job_title' => fake()->jobTitle(),
            'email_link' =>fake()-> email()
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company'=>$this->faker->company(),
            'tehnologies'=>'laravel,api,backend',
            'website'=>$this->faker->url(),
            'location'=>$this->faker->city() ,         
            'job_link'=>$this->faker->url().'/joblink.php',
            'description'=>$this->faker->paragraph(5),
            'comment'=>$this->faker->paragraph(),
            'status'=>'active', 
            
        ];
    }
}

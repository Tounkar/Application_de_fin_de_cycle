<?php

namespace Database\Factories;

use App\Models\Engin;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EnginFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Engin::class; 
    public function definition()
    {
        return [
            'nom' =>$this->faker->lastName,
            'statut' =>$this->faker->boolean,
            'certificat_de_visite_technique' =>$this->faker->imageUrl($width = 640, $height = 480),
            'assurance' =>$this->faker->imageUrl($width = 640, $height = 480),
            'vignette' =>$this->faker->imageUrl($width = 640, $height = 480),
            'categorie_engin_id' => rand(1,3),
        ];
    }
}

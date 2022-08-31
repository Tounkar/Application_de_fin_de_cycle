<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */


class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Client::class;


    public function definition()
    {
        return [

            'nom' => $this ->faker->lastName,
            'prenom' => $this ->faker->firstName,
            'telephone' => $this ->faker->unique()->phoneNumber,
            'mot_de_passe' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'Email' => $this ->faker->unique()->safeEmail,
            'livreur_id' => rand(1,20),
        ];
    }
}

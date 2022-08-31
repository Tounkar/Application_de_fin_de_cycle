<?php

namespace Database\Factories;

use App\Models\Livreur;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LivreurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Livreur::class;


    public function definition()
    {
        return [
            
            'nom' => $this ->faker->lastName,
            'prenom' => $this ->faker->firstName,
            'domicile' => $this ->faker->name,
            'telephone' => $this ->faker->unique()->phoneNumber,
            'mot_de_passe' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'Email' => $this ->faker->unique()->safeEmail,
            'permis_de_conduite' => $this ->faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
            'engin_id' => rand(1,5),
            'payer_caution_id' => rand(1,4),
            


        ];
    }
}

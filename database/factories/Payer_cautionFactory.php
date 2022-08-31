<?php

namespace Database\Factories;

use App\Models\Payer_caution;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */

class Payer_cautionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Payer_caution::class;
    public function definition()
    {
        return [
            'moyen_de_paiement' => $this ->faker->lastName,
            'montant' => $this ->faker->numberBetween($min = 25000, $max = 1000000),
        ];
    }
}

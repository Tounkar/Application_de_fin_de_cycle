<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorie_enginTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie_engins')->insert([
            ["nom_categorie" => "Camion"],
            ["nom_categorie" => "Voiture"],
            ["nom_categorie" => "Moto"],
        ]);
    }
}

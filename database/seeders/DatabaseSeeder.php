<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Client;
use App\Models\Engin;
use App\Models\Livreur;
use App\Models\Payer_caution;
use Database\Factories\LivreurFactory;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\This;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::factory(3)->create();
        $this->call(categorie_enginTableSeeder::class);
        Engin::factory(5)->create();
        Payer_caution::factory(4)->create();
        Livreur::factory(20)->create();
        Client::factory(20)->create();
    }
}

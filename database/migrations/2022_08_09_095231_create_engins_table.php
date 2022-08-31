<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engins', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->boolean("statut");
            $table->string("certificat_de_visite_technique");
            $table->string("assurance");
            $table->string("vignette");
            $table->foreignId("categorie_engin_id")->references("id")->on("categorie_engins");
            $table->timestamps();

            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() 
    {   Schema::table('engins', function( Blueprint $table){
        Schema::disableForeignKeyConstraints();
        $table->dropForeign(["categorie_engin_id"]);
    });
        Schema::dropIfExists('engins');

    }
};

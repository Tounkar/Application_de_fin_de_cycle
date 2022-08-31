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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("prenom");
            $table->string("telephone");
            $table->string("Email");
            $table->string("mot_de_passe");
            $table->foreignId("livreur_id")->references("id")->on("livreurs");
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::table("clients", function(Blueprint $table){
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(["livreur_id"]);
        });
        Schema::dropIfExists('clients');
    }
};

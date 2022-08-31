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
        Schema::create('livreurs', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("prenom");
            $table->string("Email");
            $table->string("mot_de_passe");
            $table->string("domicile");  
            $table->string("telephone");  
            $table->string("permis_de_conduite");
            $table->foreignId("engin_id")->references("id")->on("engins");
            $table->foreignId("payer_caution_id")->references("id")->on("payer_cautions");
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

        Schema::table("livreurs", function(Blueprint $table){
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(["engins_id"]);
            $table->dropForeign(["payer_cautions_id"]);
        });
        Schema::dropIfExists('livreurs');
    }
};

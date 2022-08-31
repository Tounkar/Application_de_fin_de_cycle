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
        Schema::create('colis', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("valeur_marchande");
            $table->boolean("etat_du_colis");
            $table->integer("engin_id")->index();
            $table->integer("client_id")->index();
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
    {
        Schema::table("colis", function(Blueprint $table){
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(["engin_id"]);
            $table->dropForeign(["client_id"]);
        });
        Schema::dropIfExists('colis');
    }
};

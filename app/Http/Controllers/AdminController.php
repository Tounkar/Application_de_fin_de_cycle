<?php
       
namespace App\Http\Controllers;

use App\Models\Engin;
use App\Models\Livreur;
use App\Models\Payer_caution;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        
        return view("pageadmin");
    }

    public function liste_livreur(){

        $livreurs = Livreur::orderby("nom","asc")->paginate(5);

        return view("admin_livreur.liste_livreur", compact("livreurs"));   
    }

    public function edit(Livreur $livreur){

        $engins = Engin::all();
        $payer_cautions = Payer_caution::all();
        return view("admin_livreur.modifier_livreur",compact("livreur","engins","payer_cautions"));
    }

    public function ajouter_livreur(){

        $engins = Engin::all();
        $payer_cautions = Payer_caution::all();
        return view("admin_livreur.ajouter_livreur", compact("engins","payer_cautions"));
    }

    public function store(Request $request){

        $request->validate([
            "nom"=>"required", 
            "prenom"=>"required",
            "domicile"=>"required",
            "telephone"=>"required",
            "mot_de_passe"=>"required",
            "Email"=>"required",
            "permis_de_conduite"=>"required",
            "engin_id"=>"required",
            "payer_caution_id"=>"required",

        ]);

        Livreur::create($request->all());
        return back()->with("success","livreur ajouter avec succès!");
    }

    public function delete(Livreur $livreur){
        $nom_complet = $livreur->nom ." ". $livreur->prenom;
        $livreur->delete();
        return back()->with('successDelete','le livreur '.$nom_complet.' a été supprimer avec succès!');
    }

    public function modifier(Request $request, Livreur $livreur){

        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "domicile"=>"required",
            "telephone"=>"required",
            "mot_de_passe" => "required",
            "Email"=>"required",
            "permis_de_conduite"=>"required",
            "engin_id"=>"required",
            "payer_caution_id"=>"required",

        ]);

        $livreur->update([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "domicile"=>$request->domicile,
            "telephone"=>$request->telephone,
            "mot_de_passe"=>$request->mot_de_passe,
            "permis_de_conduite"=>$request->permis_de_conduite,
            "engin_id"=>$request->engin_id,
            "payer_caution_id"=>$request->payer_caution_id,
        ]);

        return back()->with("success","livreur mise a jour avec succès!");
    }

    public function info_livreur(Livreur $livreur){

        return view("admin_livreur.info_livreur",compact("livreur"));
    }
}

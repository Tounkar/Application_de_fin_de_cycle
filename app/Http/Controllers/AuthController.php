<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Client;
use App\Models\Livreur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function client_inscription()
    {
        return view("authentification.client.inscription");
    }

    public function client_connexion()
    {
        return view("authentification.client.connexion");
    }

    public function client_connexion_store(Request $request)
    {
        //dd('ok');
        $request->validate([
            'Email' => 'required',
            'mot_de_passe' => 'required'
        ]);

        //dd($request->all());
 
        $client = Client::query()->where('Email', $request->get('Email'))->firstOrFail();

        if (!Hash::check($request->get('mot_de_passe'), $client->mot_de_passe)) {
            return back()->with('error',  "Email ou mot de passe incorecte");
        }

        Auth::guard('client')->login($client);

        //dd('ok');
        return redirect('pageclient');
        // return back()->with('error',  "Email ou mot de passe incorecte");
    }




    public function livreur_inscription()
    {
        return view("authentification.livreur.inscription");
    }

    public function livreur_connexion()
    {
        return view("authentification.livreur.connexion");
    }

    public function livreur_connexion_store(Request $request)
    {
        //dd('ok');
        $request->validate([
            'Email' => 'required',
            'mot_de_passe' => 'required'
        ]);

        //dd($request->all());

        $livreur = Livreur::query()->where('Email', $request->get('Email'))->firstOrFail();

        if (!Hash::check($request->get('mot_de_passe'), $livreur->mot_de_passe)) {
            return back()->with('error',  "Email ou mot de passe incorecte");
        }

        Auth::guard('livreur')->login($livreur);

        //dd('ok');
        return redirect('pagelivreur');
        // return back()->with('error',  "Email ou mot de passe incorecte");
    }

    public function livreur_inscription_store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'Email' => 'required',
            'mot_de_passe' => 'required|confirmed',
            'engin_id' => rand(1, 5),
            'payer_caution_id' => rand(1, 4)
        ]);

        dd($request->all());
        return redirect("/connexion/livreur");
    }


    public function admin_inscription()
    {
        return view("authentification.admin.inscription");
    }

    public function admin_inscription_store(Request $request)
    
    {
        $this->validator($request->all())->validate();
        $admin = Admin::create([ 
            'nom' => $request['nom'],
            'Email' => $request['Email'],
            'mot_de_passe' => Hash::make($request['mot_de_passe']),
        ]);
        return redirect()->intended('connexion/admin');
    }

    public function admin_connexion()
    {
        return view("authentification.admin.connexion");
    }

    public function admin_connexion_store(Request $request)
    {
        //dd('ok');
        $request->validate([
            'Email' => 'required',
            'mot_de_passe' => 'required'
        ]);

        /* dd($request->all()); */

        $admin = Admin::query()->where('Email', $request->get('Email'))->firstOrFail();

        /* dd($admin); */

        if (!Hash::check($request->get('mot_de_passe'), $admin->mot_de_passe)) {
            return back()->with('error',  "Email ou mot de passe incorecte");
        }

        Auth::guard('admin')->login($admin);

        /* dd('ok');  */
        return redirect('pageadmin');
        // return back()->with('error',  "Email ou mot de passe incorecte");
    }
}

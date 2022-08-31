<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{ 
    use Notifiable;
    use HasFactory;
    protected $fillable=["nom","prenom","telephone","mot_de_passe","Email","livreur_id"];

    public function livreur(){
        return $this -> belongsTo(Livreur::class);
    } 
}

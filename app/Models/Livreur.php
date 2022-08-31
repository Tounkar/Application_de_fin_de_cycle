<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Livreur extends  Authenticatable
{
    use Notifiable;  

    use HasFactory;

    protected $fillable=["nom","prenom","domicile","telephone","mot_de_passe","Email","permis_de_conduite","engin_id","payer_caution_id"];

    public function engin(){
        return $this -> belongsTo(Engin::class);
    } 

    public function payer_caution(){
        return $this -> belongsTo(Payer_caution::class);
    }

   

    
}

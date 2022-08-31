<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authentificable;

class Admin extends Authentificable
{
    use Notifiable;
    use HasFactory;
 
    protected $fillable=["nom","prenom","telephone","mot_de_passe","Email"];

}



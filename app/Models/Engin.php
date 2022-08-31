<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engin extends Model
{
    use HasFactory;

    public function categorie_engin(){
        return $this ->belongsTo(Categorie_engin::class);
    }
}

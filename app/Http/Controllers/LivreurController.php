<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LivreurController extends Controller
{
    public function livreur(){

        //dd(Auth::guard('livreur')->user());

        return view("pagelivreur");
    }
}

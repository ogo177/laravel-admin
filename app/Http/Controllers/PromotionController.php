<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function listePromotions(){

        return view("liste_promotions");
    }
}

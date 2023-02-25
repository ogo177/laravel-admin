<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoyageInternationalController extends Controller
{
    public function listeVoyagesInternational(){

        return view("liste_voyages_international");
    }
}

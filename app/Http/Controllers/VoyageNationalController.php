<?php

namespace App\Http\Controllers;

use App\Models\VoyageNational;
use Illuminate\Http\Request;

class VoyageNationalController extends Controller
{

    public function listeVoyagesNational(){

        $voyagesNationale = VoyageNational::all();

        return view("Voyages national.liste_voyages_national",["rows"=>$voyagesNationale]);
    }

    public function detailVoyageNational(Request $request, $id){

        $voyagesNationale = VoyageNational::find($id);

        return view("Voyages national.vayage_national_single",["voyagesNationale"=>$voyagesNationale]);
    }
}

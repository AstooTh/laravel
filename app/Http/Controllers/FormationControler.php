<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Formation;


class FormationControler extends Controller
{
    //
    public function index()
    {
        return view('ajouterFormation');
    }
    public function ajouter(Request $request)
    {
      $forma = new Formation();
      $forma->Nom = $request->nom;
      $forma->Domaine = $request->domaine;
      $forma->Spécialité = $request->specialite;
      $forma->Duree = $request->duree;
      $forma->save();
      return redirect()->back();
    }

    public function lister()
    {
        $formation = Formation::all();
        return view('listeFormation',compact('formation'));
}
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apprenant;

class ApprenantControler extends Controller
{
    //
    public function index()
    {
        return view('ajouterApprenant');
    }
    
    public function ajouter(Request $request)
    {
      $apprenant = new Apprenant();
      $apprenant->Prenom = $request->prenom;
      $apprenant->Nom = $request->nom;
      $apprenant->Classe = $request->classe;
      $apprenant->save();
      return redirect()->back();
    }

    public function lister()
    {
        $apprenant = Apprenant::all();
        return view('listeApprenant',compact('apprenant'));
    }

}

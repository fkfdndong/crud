<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Etudiant;
use Illuminate\Support\Facades\Redirect;

 class EtudiantController extends Controller
 {
     public function listeEtudiant()
     {
        $etudiants = Etudiant::all();
         return view('etudiant.liste', compact('etudiants'));
     }
 
     public function ajouterEtudiant()
     {
         return view('etudiant.ajouter');
     }


     public function ajouterEtudiantTraitement(Request $request)
{
    $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'classe' => 'required',
    ]);

    $etudiant = new Etudiant();
    $etudiant->nom = $request->input('nom'); 
    $etudiant->prenom = $request->input('prenom'); 
    $etudiant->classe = $request->input('classe'); 
    $etudiant->save();

    return redirect('/ajouter')->with('status', 'L\'étudiant a été bien ajouté avec succès.');
}


public function updateEtudiant($id)
     {
        $etudiants = Etudiant::find($id);
         return view('etudiant.update' ,compact('etudiants'));
     }


     public function updateEtudiantTraitement(Request $request)
     {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);
    
        $etudiant =  Etudiant::find($request->id);
        $etudiant->nom = $request->input('nom'); 
        $etudiant->prenom = $request->input('prenom'); 
        $etudiant->classe = $request->input('classe'); 
        $etudiant->update();
        return redirect('/etudiant')->with('status', 'L\'étudiant a été bien modifier avec succès.');
     }

    
public function deleteEtudiant($id)
{
   $etudiant = Etudiant::find($id);
   $etudiant->delete();
   return redirect('/etudiant')->with('status', 'L\'étudiant a été bien supprimer avec succès.');
}

 }
 
 
<?php

namespace App\Http\Controllers;

use App\Models\Employes;
use App\Models\Affecter;
use Illuminate\Http\Request;

class EmployesController extends Controller
{
    /**
     * Afficher une liste des ressources.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes = Employes::all();
        return view('employes.index', ['employes' => $employes]);
    }

    /**
     * Montrer le formulaire pour créer une nouvelle ressource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employes.create');
    }

    /**
     * Stocker une nouvelle ressource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Cin' => 'required|unique:employes,Cin',
            'Nom' => 'required',
            'Prénom' => 'required',
            'Département' => 'required',
            'Date_naissance' => 'required',
            'Téléphone' => 'required|numeric',
            'Etablissement' => 'required',
        ]);

        Employes::create($request->all());

        return redirect()->route('employes.index')->with('success', 'Le stagiaire a été ajouté avec succès.');
    }

    /**
     * Afficher une ressource spécifique.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employes = Employes::where('Cin', $id)->first();
        return view('employes.show', ['employes' => $employes]);
    }

    /**
     * Montrer le formulaire pour éditer une ressource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employes = Employes::where('Cin', $id)->first();
        return view('employes.edit', ['employes' => $employes]);
    }

    /**
     * Mettre à jour une ressource spécifique.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employes = Employes::where('Cin', $id)->first();

        $request->validate([
            'Cin' => 'required|unique:employes,Cin,' . $id,
            'Nom' => 'required',
            'Prénom' => 'required',
            'Département' => 'required',
            'Date_naissance' => 'required',
            'Téléphone' => 'required|numeric',
            'Etablissement' => 'required',
        ]);

        $employes->update($request->all());

        return redirect()->route('employes.index')->with('success', 'Le stagiaire a été mis à jour avec succès.');
    }

    /**
     * Supprimer une ressource spécifique.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employes = Employes::where('Cin', $id)->first();
        $employes->delete();

        return redirect()->route('employes.index')->with('success', 'Le stagiaire a été supprimé avec succès.');
    }


    /**
     * Requête de vacances pour un employé spécifique.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Requête de vacances pour un employé spécifique.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function vacationRequest($id)
    {
        $employes = Employes::where('Cin', $id)->first();
        return view('employes.vacation-request', ['employes' => $employes]);
    }

    /**
     * Demande de certificat pour un employé spécifique.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function certificateRequest($id)
    {
        $employes = Employes::where('Cin', $id)->first();
        return view('employes.certificate-request', ['employes' => $employes]);
    }
}

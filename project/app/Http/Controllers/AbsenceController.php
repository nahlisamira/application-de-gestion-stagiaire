<?php

namespace App\Http\Controllers;
use App\Models\Absence;
use Illuminate\Http\Request;

class AbsenceController extends Controller
{
    /**
     * Afficher une liste des ressources.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absence = Absence::all();
        return view('absences.index', ['absences' => $absence]);
    }

    /**
     * Montrer le formulaire pour créer une nouvelle ressource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('absences.create');
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
            'Cin' => 'required',
            'Nom' => 'required',
            'Prénom' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'justification' => 'required',
        ]);
    
        Absence::create($request->all());
        // Redirigez vers la page de liste des affectations avec un message de succès
        return redirect()->route('absences.index')->with('success', 'marquer absence avec succès.');
    }

    /**
     * Afficher une ressource spécifique.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Montrer le formulaire pour éditer une ressource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
       //
    }

    /**
     * Supprimer une ressource spécifique.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
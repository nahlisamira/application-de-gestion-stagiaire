<?php

namespace App\Http\Controllers;
use App\Models\Affecter;
use Illuminate\Http\Request;

class affecterController extends Controller
{
    /**
     * Afficher une liste des ressources.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $affecter = Affecter::all();
        return view('affecter.index', ['affecter' => $affecter]);
    }

    /**
     * Montrer le formulaire pour créer une nouvelle ressource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('affecter.create');
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
            'sujet' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'service' => 'required',
            'enacdrant' => 'required',
        ]);
    
        Affecter::create($request->all());
        // Redirigez vers la page de liste des affectations avec un message de succès
        return redirect()->route('affecter.index')->with('success', 'Affectation ajoutée avec succès.');
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
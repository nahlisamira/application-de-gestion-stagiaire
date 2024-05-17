<?php

namespace App\Http\Controllers;

use App\Models\Encadrants;
use Illuminate\Http\Request;

class EncadrantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            // Récupérer tous les encadrants de la base de données
            $encadrants = Encadrants::all();

            // Renvoyer la vue 'encadrants.index' avec la liste des encadrants
            return view('encadrants.index', ['encadrants' => $encadrants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('encadrants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Cin'=>'required|unique:encadrants,Cin',
            'Nom' => 'required',
            'Prénom' => 'required',
            'Téléphone' => 'required|numeric',
            'E_mail' => 'required|E_mail|unique:encadrants,E_mail',
        
        ]);

        Encadrants::create($request->all());

        return redirect()->route('encadrants.index')->with('success', 'Encadrant ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Remplacez `Encadrant` par le nom de votre modèle.
    $encadrants = Encadrants::find($id);

    // Assurez-vous que l'objet existe.
    if (!$encadrants) {
        return redirect()->route('encadrants.index')->with('error', 'Encadrant introuvable.');
    }

    return view('encadrants.edit', compact('encadrants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $encadrants = Encadrants::where('Cin', $id)->first();

        $request->validate([
            'Cin' => 'required|unique:encadrants,Cin,' . $id,
            'Nom' => 'required',
            'Prénom' => 'required',
            'E_mail' => 'required',
            'Téléphone' => 'required|numeric',
        ]);

        $encadrants->update($request->all());

        return redirect()->route('encadrants.index')->with('success', 'Le stagiaire a été mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $encadrant = Encadrants::find($id);

    if (!$encadrant) {
        return redirect()->route('encadrants.index')->with('error', 'Encadrant introuvable.');
    }

    $encadrant->delete();

    return redirect()->route('encadrants.index')->with('success', 'Le stagiaire a été supprimé avec succès.');
    }

}

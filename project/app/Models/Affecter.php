<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Affecter extends Model
{
    protected $table = 'affecter';

    // Définissez les champs pouvant être assignés en masse
    protected $fillable = ['sujet', 'date_debut', 'date_fin', 'service','encadrant'];

    // Relations et autres méthodes peuvent être ajoutées ici

    public function employes()
    {
        return $this->belongsTo(Employes::class);
    }
}



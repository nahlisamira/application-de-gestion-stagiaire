<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employes;

class Employes extends Model
{
    use HasFactory;
    protected $fillable = ['Cin','Nom','Prénom','Département','Date_naissance','Téléphone','Etablissement'
];
}
?>

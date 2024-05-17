<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Absence extends Model
{

    
    use HasFactory;
    protected $fillable = ['Cin','Nom','Prénom','date_debut','date_fin','justification'
];
}
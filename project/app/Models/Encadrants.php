<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Encadrants extends Model
{
    use HasFactory;
    protected $fillable = ['Cin','Nom','Prénom','E_mail','Téléphone'
];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creneau extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_enseignant',
        'id_classe',
        'datecreneau',
        'heurecreneau',
        'sallecreneau',
        'duree',
        'matiere',
        'complet',
    ];
    public $timestamps = false;
}

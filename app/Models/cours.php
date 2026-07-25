<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cours extends Model
{
    protected $table ='cours';

    protected $fillable =[

    'intitulé_cours',
    'filière',
    'niveau',
    'semestre',
    'nbre_heure_cours',
    'nbre_credit',

    ];

    //relations

    public function administrateur():BelongsTo
    {

     return $this->belongsTo(administrateur::class);    
    }
    public function enseignant(): BelongsToMany
    {
        return $this->belongsToMany(enseignant::class);
    }
}

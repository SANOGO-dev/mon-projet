<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class administrateur extends Model
{
    protected $table = 'administrateur';

    protected $fillable = [

    'nom',
    'prénom',
    'contact',
    'grade',
    'statut',
    'spécialité',
    ];

    //les relations

    public function enseignant(): HasMany
    {
        return $this->HasMany(enseignant::class);
    }
    public function cours(): HasMany
    {
          return $this->HasMany(cours::class);
    }

    //accesseur pour le nom complet
    public function getNomCompletAttribute():string
    {
         return "{$this->prenom} {$this->nom}";
    }
}

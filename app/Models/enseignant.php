<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class enseignant extends Model
{
    protected $stable = 'enseignant';

    protected $fillable = [

    'nom',
    'prénom',
    'grade',
    'statut',
    'déparetment',
    'email',
    'téléphone',
    'taux_horaires',

    ];

    // les relations
    public function administrateur (): BelongsTo
    {

    return $this->belongsTo(administrateur::class);
    }
    public function cours (): BelongsToMany
    {
       
    return $this->belongsToMany(cours::class);
    }

    //Accesseur
    public function getNomCompletAttribute(): string
    {
        return "{$this->prenom} {$this->nom}";
    }
    }

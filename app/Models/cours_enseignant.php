<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cours_enseignant extends Model
{
    protected $table='cours_enseignant'

    protected $fillable= ['cours_id' , 'enseignant_id'];
}

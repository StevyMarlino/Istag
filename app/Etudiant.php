<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = [

        'name',
        'first_name',
        'email',
        'date_born',
        'lieu',
        'level',
        'phone',
        'filiere',
        'cours',
        'acte_nais',
        'bacc',
        'releve_note',
        'transaction'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

}

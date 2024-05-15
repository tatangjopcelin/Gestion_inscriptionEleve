<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
        'region',
        'ville',
        'adresse',
        'type_paiement',
        'telephone',
];
    use HasFactory;
}

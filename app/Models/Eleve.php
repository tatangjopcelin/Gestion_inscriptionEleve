<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\relationship\hasOne;

class Eleve extends Model
{
    use HasFactory,softDeletes;
    protected $fillable=[
        'nom',
        'prenom',
        'email',
        'classe',
        'sexe',
        'specialite',
    ];
     public function image():hasOne
     {
         return $this->hasOne(Image::class);
      }
}

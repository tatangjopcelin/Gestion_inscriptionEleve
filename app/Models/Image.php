<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\relationship\belongsTo;


class Image extends Model
{
    use HasFactory,softDeletes;
   protected $fillable=[
    'url',
    'eleve_id',
   ];
   public function eleve():belongsTo
   {
       return this->belongsTo(Eleve::class);
   }


}

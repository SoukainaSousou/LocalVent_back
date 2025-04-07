<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prix',
        'description',
        'image',
        'type',
        'disponible',
        'categorie',
        'marque',
        'modele',
        'annee',
        'kilometrage',
        'localisation',
        'quantite',
    ];
    
}

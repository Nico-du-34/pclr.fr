<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;

class Auto extends Model
{
    protected $fillable = ['id', 'type', 'categorie_id', 'name', 'label', 'prix', 'disponibilite', 'image_url', 'created_at', 'updated_at'];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}

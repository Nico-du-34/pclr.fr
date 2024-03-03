<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['id', 'type', 'categorie_id', 'name', 'label', 'prix', 'disponibilite', 'image_url', 'created_at', 'updated_at'];
}

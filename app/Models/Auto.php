<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Auto extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;
    // public $timestamps = false;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'type',
        'categorie_id',
        'name',
        'label',
        'prix',
        'disponibilite',
        'image_url',
        'created_at',
        'updated_at'
    ];
}
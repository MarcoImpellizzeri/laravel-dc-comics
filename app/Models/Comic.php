<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    // protected $casts = [
    //     'artists' => 'array',
    //     "writers" => "array"
    // ];

    // Definisci l'accessor per il campo 'artists'
    // public function getArtistsAttribute($value)
    // {
    //     return json_decode($value, true);
    // }

    // Definisci il mutator per il campo 'artists'
    public function setArtistsAttribute($value)
    {
        $this->attributes['artists'] = json_encode($value);
    }

    // Definisci l'accessor per il campo 'writers'
    // public function getWritersAttribute($value)
    // {
    //     return json_decode($value, true);
    // }

    // Definisci il mutator per il campo 'writers'
    public function setWritersAttribute($value)
    {
        $this->attributes['writers'] = json_encode($value);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{
    use HasFactory, SoftDeletes;

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

    protected $fillable = [
        "title",
        "description",
        "thumb",
        "price",
        "series",
        "sales_date",
        "type",
        "artists",
        "writers", 
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; // Import de la classe Str


class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'surface',
        'rooms',
        'bedrooms',
        'floor',
        'price',
        'city',
        'address',
        'poste_code',
        'sold',
    ];

    public function options()
    {
        return $this->belongsToMany(Option::class);
    }

    // Méthode getSlug
    public function getSlug(): string
    {
        return Str::slug($this->title);
    }
}

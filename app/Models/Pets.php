<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pets extends Model
{
    use HasFactory;

    protected $fillable = [
        "owner_id",
        "animal_id",
        "race_id",
        "name",
        "slug_pet",
        "age",
        "weight",
        "photo",
        "is_vaccinated",
        "peat_eats",
        "temper",
    ];

    public function getBreedAnimal()
    {
        return $this->belongsTo(AnimalBreed::class, 'race_id');
    }


    public function animal()
    {
        return $this->belongsTo(Animals::class, 'animal_id');
    }
}

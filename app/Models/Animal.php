<?php

namespace App\Models;
use App\Models\Vaccination;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Owner;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'specie', 'date_of_birth', 'genre', 'owner', 'weight', 'size', 'img_link', 'owner_id'];

    public function vaccinations() {
        return $this->belongsToMany(Vaccination::class, 'animal_vaccination')->withPivot('date_injection','dose','booster_date', 'notes');
    }

    public function owner() {
        return $this->belongsTo(Owner::class);
    }
}

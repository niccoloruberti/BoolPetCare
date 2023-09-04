<?php

namespace App\Models;
use App\Models\Vaccination;
use App\Models\Desease;
use App\Models\Specie;
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
    public function deseases(){
    return $this->belongsToMany(Desease::class, 'animal_desease')->withPivot('diagnosis','notes');
    }
    
    public function animal_vaccinations() {
        return $this->hasMany(Animal_Vaccination::class);
    }

    public function species(){
        return $this->belongsTo(Specie::class, 'specie_id');
    }
}

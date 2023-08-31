<?php

namespace App\Models;
use App\Models\Animal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    use HasFactory;

    protected $fillable = ['vaccine', 'ph'];

    public function animals() {
        return $this->belongsToMany(Animal::class)->withPivot('date_injection','dose','booster_date', 'notes');
    }
}

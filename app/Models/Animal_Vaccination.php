<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal_Vaccination extends Model
{
    use HasFactory;

    protected $table = 'animal_vaccination';

    protected $fillable = ['date_injection', 'dose', 'booster_date', 'notes', 'animal_id','vaccination_id'];
}

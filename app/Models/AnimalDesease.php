<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalDesease extends Model
{
    use HasFactory;

    protected $table= 'animal_desease';
    
    protected $fillable =['animal_id', 'desease_id','diagnosis','notes'];
}

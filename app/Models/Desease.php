<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desease extends Model
{
    use HasFactory;

    public function animals() {
        return $this->belongsToMany(Animal::class)->withPivot('diagnosis','notes');
    }
}

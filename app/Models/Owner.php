<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Model\Animal;

class Owner extends Model
{
    use HasFactory;

    public function animals() {
        return $this->hasMany(Animall::class);
    }
}

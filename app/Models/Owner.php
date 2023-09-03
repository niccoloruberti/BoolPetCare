<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'surname', 'address', 'phone', 'email'];

    public function animals() {
        return $this->hasMany(Animal::class);
    }
}

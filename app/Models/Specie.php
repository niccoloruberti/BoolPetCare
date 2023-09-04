<?php

namespace App\Models;
use Illuminate\Support\Str;
use App\Models\Animal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specie extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug'];
    public function animals(){
        return $this->hasMany(Animal::class, 'specie_id');

    }
    public static function generateSlug($name){
        return Str::slug($name, '-');
    }
}

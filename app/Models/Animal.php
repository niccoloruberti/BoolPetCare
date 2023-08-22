<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'specie', 'date_of_birth', 'genre', 'owner', 'weight', 'size', 'img_link'];
}

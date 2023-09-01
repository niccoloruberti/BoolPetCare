<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index(){
        $animals = Animal::with('vaccinations')->get();
        $vaccinationsData = [];
        foreach ($animals as $animal) {
            $vaccinations = $animal->vaccinations; // Vaccinations di questo animale
            $vaccinationsData[] = $vaccinations; // Aggiungi le vaccinations all'array di risultati
        }
    
        return response()->json([
            'success' => true,
            'results' => $animals,
            'vaccinations' => $vaccinationsData,
        ]);
    }
}

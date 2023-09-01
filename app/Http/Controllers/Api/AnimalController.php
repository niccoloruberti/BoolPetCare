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
            $vaccinations = $animal->vaccinations; 
            $vaccinationsData[] = $vaccinations; 
        }
    
        return response()->json([
            'success' => true,
            'results' => $animals,
            'vaccinations' => $vaccinationsData,
        ]);
    }
}

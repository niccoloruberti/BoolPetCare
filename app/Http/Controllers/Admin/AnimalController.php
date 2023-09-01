<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreAnimalRequest;
use App\Http\Requests\UpdateAnimalRequest;
use App\Models\Animal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vaccination;
use App\Models\Animal_Vaccination;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::all();
        
        return view('admin.animals.index', compact('animals'));
    }

    public function animal_vaccine_index(Request $request, $animal)
    {   
        $id_animal = $request->animal;
        $animal = Animal::find($id_animal);
        $animal_vaccine = Animal_Vaccination::all();
        
        
        return view('admin.animals.animal_vaccine_index', compact('animal_vaccine', 'animal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.animals.create');
    }

    public function animal_vaccine_create(Request $request,Animal $animal)
    {
        $vaccinations= Vaccination::all();
        $id_animal = $request->animal;
        $animal_id= $id_animal->id;
        //$id_animal = $request->animal;
        // $id_vaccine = $request->vaccine;
        //dd($id_animal);
        
        return view('admin.animals.animal_vaccine_create', compact('vaccinations','animal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnimalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnimalRequest $request)
    {
        $form_data = $request->all();
        
        $animal = new Animal();
        $animal->fill($form_data);
        $animal->save();
        return redirect()->route('admin.animals.show', $animal->id);
    }

    public function animal_vaccine_store(Request $request, Animal $animal)
    {
        //$animal_id=$animal->id;
        $form_data= $request->all();
       // $animal->animal_id=$form_data['animal_id'];
        $animal_vaccine = new Animal_Vaccination;
        //$id_animal = $request->animal;
       // $animal_id= $id_animal->id;
        $form_data['animal_id'] = $animal->id;
        $animal_vaccine->fill($form_data);
        
        $animal_vaccine->save();
        return redirect()->route('admin.animals.index.vaccine', ['animal' => $animal->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        $id_animal = $animal->id;
        
        return view ('admin.animals.show', compact('animal', 'id_animal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    { 
            return view('admin.animals.edit', compact('animal'));
        
    }

    public function animal_vaccine_edit(Animal $animal, Request $request)
    {
        $vaccinations= Vaccination::all();
        $id_animal = $request->animal;
        $animal_id= $id_animal->id;
        return view('admin.animals.animal_vaccine_edit', compact('animal', 'vaccinations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnimalRequest  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnimalRequest $request, Animal $animal)
    {
        $form_data = $request->all();

        $animal->update($form_data);

        return redirect()->route('admin.animals.show', $animal->id);
    }

    public function animal_vaccine_update(Request $request, Animal $animal)
    {
         //$animal_id=$animal->id;
        //     $form_data= $request->all();
        
        //     $animal->animal_id=$form_data['animal_id'];
            
        //     $id_animal = $request->animal;
        //     $animal_id= $id_animal->id;
        //     $form_data['animal_id'] = $animal->id;
          
        //    $animal_vaccine->update($form_data);
        // return redirect()->route('admin.animals.index.vaccine', ['animal' => $animal->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();

        return redirect()->route('admin.animals.index');
    }

    
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $animals = Animal::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('owner', 'LIKE', "%{$search}%")
            ->orWhere('specie', 'LIKE', "%{$search}%")
            ->get();

            
    
        // Return the search view with the resluts compacted
        return view('admin.animals.search', compact('animals'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreAnimalRequest;
use App\Http\Requests\UpdateAnimalRequest;
use App\Models\Animal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vaccination;
use App\Models\Animal_Vaccination;
use App\Models\Desease;
use App\Models\AnimalDesease;
use App\Models\Owner;
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

    public function animal_desease_index(Request $request, $animal)
    {   
        $id_animal = $request->animal;
        $animal = Animal::find($id_animal);
        $animal_desease = Desease::all();

        return view('admin.animals.animal_desease_index', compact('animal_desease', 'animal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id_owner = array_keys($request->query());
        $id_owner = reset($id_owner);
        return view('admin.animals.create', compact('id_owner'));
    }

    public function animal_vaccine_create(Request $request, Animal $animal)
    {
        $vaccinations = Vaccination::all();
        $id_animal = $request->animal;
        $animal_id = $id_animal->id;


        return view('admin.animals.animal_vaccine_create', compact('vaccinations', 'animal'));
    }

    public function animal_desease_create(Request $request, Animal $animal, Desease $desease)
    {
        $deseases = Desease::all();
        return view('admin.animals.animal_desease_create', compact('deseases','animal', 'desease'));
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
        $form_data = $request->all();
        $animal_vaccine = new Animal_Vaccination;

        $form_data['animal_id'] = $animal->id;
        
        $animal_vaccine->fill($form_data);

        $animal_vaccine->save();
        return redirect()->route('admin.animals.index.vaccine', ['animal' => $animal->id]);
    }

    public function animal_desease_store(Request $request, Animal $animal,Desease $desease)
    {
        
        $form_data=$request->all();
        $animal_desease = new AnimalDesease;
        $animal_desease->fill($form_data);
        $animal_desease->save();

        return redirect()->route('admin.animals.index.desease', ['animal' => $animal->id]);
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

        return view('admin.animals.show', compact('animal', 'id_animal'));
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

    public function animal_vaccine_edit(Animal $animal, Request $request, Animal_Vaccination $animal_vaccination)
    {
        $vaccinations = Vaccination::all();
        $id_animal = $request->animal;
        $animal_id= $id_animal->id;
        $animal = Animal::find($animal_id);
        $animal_vaccination = $animal->animal_vaccinations->first();
        
        return view('admin.animals.animal_vaccine_edit', compact('animal', 'vaccinations','animal_vaccination'));
    }

    public function animal_desease_edit(Animal $animal, Request $request, AnimalDesease $animal_desease)
    {
        $deseases = Desease::all();
        
        $id_animal = $request->animal;
        $animal_id= $id_animal->id;
        $animal = Animal::find($animal_id);
      
        return view('admin.animals.animal_desease_edit', compact('animal','deseases','animal_desease'));
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

    public function animal_vaccine_update(Request $request, Animal $animal, Animal_Vaccination $animal_vaccination)
    {
        // $form_data= $request->all();
        // $animal_id = $form_data['animal_id'];
        // $animal = Animal::find($animal_id);
        // $animal_vaccination = $animal->animal_vaccinations;
    
        // $specific_animal_vaccination = Animal_Vaccination::find($animal_vaccination->id);
        // dd($specific_animal_vaccination);
                
        // $animal_vaccination->update($form_data);

        $form_data = $request->all();
        
        $animal_vaccination->update($form_data);


        
        return redirect()->route('admin.animals.index.vaccine', ['animal' => $animal->id]);
    }

    public function animal_desease_update(Request $request, Animal $animal, AnimalDesease $animal_desease, Desease $desease)
    {
       
        $form_data=$request->all();
        $animal_desease->update($form_data);
        
        return redirect()->route('admin.animals.index.vaccine', ['animal' => $animal->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        $animal->vaccinations()->detach();
        $animal->delete();

        return redirect()->route('admin.animals.index');
    }

    public function animal_vaccine_destroy(Animal_Vaccination $animal_vaccination, Animal $animal)
    {
        $animal_vaccination = Animal_Vaccination::find($animal->id);
        $animal_vaccination->delete();
        return  redirect()->route('admin.animals.index.vaccine', ['animal' => $animal->id]);
    }

    public function search(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $animals = Animal::query()
            ->where('name', 'LIKE', "%{$search}%")
            
            ->orWhere('specie', 'LIKE', "%{$search}%")
            ->get();

        $owner= Owner::query()
        ->orWhere('name', 'LIKE', "%{$search}%")
        ->get();

        // Return the search view with the resluts compacted
        return view('admin.animals.search', compact('animals', 'owner'));
    }
}

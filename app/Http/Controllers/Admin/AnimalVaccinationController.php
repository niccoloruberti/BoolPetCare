<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreAnimal_VaccinationRequest;
use App\Http\Requests\UpdateAnimal_VaccinationRequest;
use App\Models\Animal_Vaccination;
use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Vaccination;
use Illuminate\Http\Request; //<-------- AGGIUNTO
class AnimalVaccinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $vaccines_name= Vaccination::all();
       // dd($vaccines_name);
        $id_animal = $request->animal;
        $vaccines = Animal_Vaccination::where($id_animal);
        $animal = Animal::find($id_animal);
        
        
        
        
        
        return view('admin.animal_vaccination.index', compact('id_animal', 'vaccines','vaccines_name','animal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $vaccinations = Vaccination::all();
       // $animals = Animal::all();
      
        $id_animal = $request->animal;
        $id_vaccine = $request->vaccine;
        
        
        return view('admin.animal_vaccination.create', compact('vaccinations', 'id_animal', 'id_vaccine'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnimal_VaccinationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnimal_VaccinationRequest $request)
    {
        $form_data = $request->all();
        $vaccine = new Animal_Vaccination();
        
        $vaccine->fill($form_data);
        $animal_id = $request->animal;
        
        
        
        if($request->has('vaccinations')) {
            $vaccine->vaccinations()->attach($request->vaccination_id);
        }
        $vaccine->save();
       

        return redirect()->route('admin.animals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal_Vaccination  $animal_Vaccination
     * @return \Illuminate\Http\Response
     */
    public function show(Animal_Vaccination $animal_Vaccination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal_Vaccination  $animal_Vaccination
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal_Vaccination $animal_Vaccination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnimal_VaccinationRequest  $request
     * @param  \App\Models\Animal_Vaccination  $animal_Vaccination
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnimal_VaccinationRequest $request, Animal_Vaccination $animal_Vaccination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal_Vaccination  $animal_Vaccination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal_Vaccination $animal_Vaccination)
    {
        //
    }
}

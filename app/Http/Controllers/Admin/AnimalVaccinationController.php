<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreAnimal_VaccinationRequest;
use App\Http\Requests\UpdateAnimal_VaccinationRequest;
use App\Models\Animal_Vaccination;
use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Vaccination;

class AnimalVaccinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.animal_vaccination.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($)
    {
        $vaccinations = Vaccination::all();
        // $animals = Animal::all();
        dd($animal->id);
        return view('admin.animal_vaccination.create', compact('vaccinations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnimal_VaccinationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnimal_VaccinationRequest $request, $id)
    {
        $form_data = $request->all();
        $vaccine = new Animal_Vaccination();

        $vaccine->fill($form_data);

        $vaccine->save();

        if($request->has('vaccinations')) {
            $vaccine->vaccinations()->sync($request->vaccinations);
        }

        dd($vaccine);
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

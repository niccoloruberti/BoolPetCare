<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnimal_VaccinationRequest;
use App\Http\Requests\UpdateAnimal_VaccinationRequest;
use App\Models\Animal_Vaccination;

class AnimalVaccinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnimal_VaccinationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnimal_VaccinationRequest $request)
    {
        //
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

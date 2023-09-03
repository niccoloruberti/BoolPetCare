<?php

namespace App\Http\Controllers;

use App\Models\Desease;
use App\Http\Requests\StoreDeseaseRequest;
use App\Http\Requests\UpdateDeseaseRequest;

class DeseaseController extends Controller
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
     * @param  \App\Http\Requests\StoreDeseaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeseaseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Desease  $desease
     * @return \Illuminate\Http\Response
     */
    public function show(Desease $desease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Desease  $desease
     * @return \Illuminate\Http\Response
     */
    public function edit(Desease $desease)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeseaseRequest  $request
     * @param  \App\Models\Desease  $desease
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeseaseRequest $request, Desease $desease)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Desease  $desease
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desease $desease)
    {
        //
    }
}

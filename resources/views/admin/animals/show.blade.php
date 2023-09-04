@extends('layouts.admin')

@section('content')
<<<<<<< HEAD
<div class="container">
    <div class="row">
        <div class="my-4 d-flex justify-content-end">
            <a href="{{ route('admin.animals.index') }}" class="btn btn-sm btn-primary">All Animals</a>
        </div>
        {{-- libretto vaccinazioni --}}
        <div class="my-4 d-flex justify-content-end">
            {{-- MODIFICATA ROUTE PER PORTARCI DIETRO L'ID DELL'ANIMALE, PROBABILMENTE DA FARE ANCHE NEL PASSAGGIO DATI A STORE PERCHE' RESTITUISCE NULL --}}
            <a href="{{ route('admin.animals.index.vaccine', ['animal' => $animal]) }}" class="btn btn-sm btn-primary">Libretto Vaccinazioni</a>
        </div>
        <div class="my-4 d-flex justify-content-end">
            {{-- MODIFICATA ROUTE PER PORTARCI DIETRO L'ID DELL'ANIMALE, PROBABILMENTE DA FARE ANCHE NEL PASSAGGIO DATI A STORE PERCHE' RESTITUISCE NULL --}}
            <a href="{{ route('admin.animals.index.desease', ['animal' => $animal]) }}" class="btn btn-sm btn-primary">Cartella Clinica</a>
        </div>
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3>Animal's Name: {{ $animal->name }}</h3>
                    @if(empty($animal->owner))
                    <h3>Owner: <span style="color: red"> N/A</span></h3>
                    @else
                    <h3>Owner: {{ $animal->owner->name.' '.$animal->owner->surname }}</h3>
                    @endif
                    <h4>Specie: {{ $animal->specie }}</h4>
                    @if(empty($animal->date_of_birth))
                    <h6>Date of birth: <span style="color: red"> N/A</span></h6>
                    @else
                    <h6>Date of birth: {{ $animal->date_of_birth }}</h6>
                    @endif
                    @if(empty($animal->genre))
                    <h6>Genre:<span style="color: red"> N/A</span></h6>
                    @else
                    <h6>Genre: {{ $animal->genre }}</h6>
                    @endif
                    @if(empty($animal->weight))
                    <h6>Weight: <span style="color: red"> N/A Kg</span></h6>
                    @else
                    <h6>Weight: {{ $animal->weight }} Kg</h6>
                    @endif
                    @if(empty($animal->size))
                    <h6>Size: <span style="color: red"> N/A</span></h6>
                    @else
                    <h6>Size: {{ $animal->size }}</h6>
                    @endif
                </div>
            </div>
            <div>
                <img class="my-5" src="{{ $animal->img_link }}" alt="">
=======
    <div class="container">
        <div class="row">
            <div class="my-4 d-flex justify-content-start">
                <a href="{{route('admin.animals.index')}}" class="btn btn-sm back-button"><i class="fa-regular fa-circle-left fa-l me-2" style="color: #ad4e1a;"></i>All Animals</a>
            </div>
           
            <div class="col-12 text-center fw-bold my-5">
                <h2>More Info about <span style="color:#E04F00">{{$animal->name}}</span> The <span style="color:#E04F00">{{$animal->specie}}</span></h2>
            </div>
            <div class="col-8 offset-2 d-flex card justify-content-between flex-column flex-md-row" style="min-width: 450px">
                <div class="col-12 col-md-5 d-flex justify-content-center ">
                    <img class="my-5 " src="{{$animal->img_link}}" alt="" style="border-radius: 50%;" height="250px" width="250px">
                </div>
                <div class="d-flex  col-12 col-md-8 align-items-center flex-column mt-5 mb-4">
                    <div class=" mb-3 d-flex flex-column ">
                        <span class="fs-3"> Animal's Name: <span style="color:#E04F00">{{$animal->name}}</span></span>
                        <span class="fs-3">Owner: <span style="color:#E04F00">{{($animal->owner) ? $animal->owner->name.' '.$animal->owner->surname : ''}}</span></span>
                        <span class="fs-3">Specie:<span style="color:#E04F00"> {{$animal->specie}}</span></span>
                    </div>
                    <div class="d-flex flex-column">
                        <span class="fs-5">Date of birth: <strong>{{$animal->date_of_birth}}</strong></span>
                        <span class="fs-5">Genre: <strong> {{$animal->genre}}</strong></span >
                        <span class="fs-5">Weight:  <strong>{{$animal->weight}} kg</strong></span >
                        <span class="fs-5">Size:  <strong>{{$animal->size}}</strong></span >
                    </div>
                </div>
               
>>>>>>> origin/style-brench
            </div>
            <div class=" my-5 ">
                <div class="col-6  d-flex flex-row py-2 offset-3 justify-content-center">
                    {{-- libretto vaccinazioni --}}
                    <div class="mx-5 ">
                        {{-- MODIFICATA ROUTE PER PORTARCI DIETRO L'ID DELL'ANIMALE, PROBABILMENTE DA FARE ANCHE NEL PASSAGGIO DATI A STORE PERCHE' RESTITUISCE NULL --}}
                        <a href="{{route('admin.animals.index.vaccine', ['animal' => $animal])}}" class="btn btn-sm button-link">Vaccination record</a>
                        </div>
                    <div class="mx-5">
                        {{-- MODIFICATA ROUTE PER PORTARCI DIETRO L'ID DELL'ANIMALE, PROBABILMENTE DA FARE ANCHE NEL PASSAGGIO DATI A STORE PERCHE' RESTITUISCE NULL --}}
                        <a href="{{route('admin.animals.index.desease', ['animal' => $animal])}}" class="btn btn-sm button-link">Medical records</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="my-4 d-flex justify-content-start">
            <a href="{{route('admin.animals.index.vaccine', ['animal'=>$animal])}}" class="btn btn-sm back-button"><i class="fa-regular fa-circle-left fa-l me-2" style="color: #ad4e1a;"></i>Vaccination Record</a>
        </div>
        <div class="row my-5">
<<<<<<< HEAD
            <div class="col-6">
                <h2>Add Vaccination</h2>
            </div>
            <div class="col-6 text-end">
                <a class="btn btn-warning" href="{{ route('admin.animals.index.vaccine', ['animal' => $animal]) }}">Back</a>
            </div>
        </div>
        <div class="col-7">
            <form action="{{ route('admin.animals.store.vaccine', ['animal' => $animal]) }}" method="POST">
                @csrf
    
                {{-- DATE INJECTION --}}
                <div class="form-group mt-4">
                    <label class="mb-2" for="date_injection">Date of Injection</label>
                    <input type="date" name="date_injection" id="date_injection" class="form-control" autofocus required value="{{ old('date_injection') }}">
                </div>
    
                {{-- DOSE --}}
                <div class="form-group mt-4">
                    <label class="mb-2" for="dose">Vaccine Dose</label>
                    <input type="number" min="0" max="100" step=".1" name="dose" id="dose" class="form-control" placeholder="Enter Dose in mg" required value="{{ old('dose') }}">
                </div>
    
                {{-- BOOSTER DATE --}}
                <div class="form-group mt-4">
                    <label class="mb-2" for="booster_date">Booster Date</label>
                    <input type="date" name="booster_date" id="booster_date" class="form-control" required value="{{ old('booster_date') }}">
                </div>
    
                {{-- ANIMAL ID --}}
                <input type="hidden" name="animal_id" value="{{ $animal->id }}">
    
                {{-- VACCINATION ID --}}
                <div class="form-group mt-4">
                    <label class="mb-2" for="vaccination_id">Vaccino</label>
                    <select class="form-control" name="vaccination_id" id="vaccination_id" required>
                        <option value="" {{ old('vaccination_id') == '' ? 'selected' : '' }}>Choose vaccine...</option>
                        @foreach($vaccinations as $vaccine)
                        <option value="{{ $vaccine->id }}" {{ old('vaccination_id') == $vaccine->id ? 'selected' : '' }}>
                            {{ $vaccine->vaccine }}
                        </option>
=======
            <div class="col-12 text-center fw-bold">
                <h2>Add a Vaccination to <span style="color: #1f615f"> {{$animal->name}}</span> <i class="fas fa-paw "
                    aria-hidden="true" style="color: #1f615f" ></i> </h2>
            </div>
        </div>
        <div class="col-12">
            <form action="{{route('admin.animals.store.vaccine', ['animal'=>$animal])}}" method="POST">
                @csrf

                <div class="mt-5 text-center">
                    <label for="date_injection" class="fw-bold  me-2">Injection Date: </label>
                    <input type="date" name="date_injection" id="date_injection" >
                    <label for="booster_date" class="fw-bold ms-5 me-2">Booster Date: </label>
                    <input type="date" name="booster_date" id="booster_date" placeholder="booster" >
                
                
                    <label for="dose" class="fw-bold ms-5 me-3">Injection Dose: </label>
                    <input type="text" name="dose" id="dose" placeholder="dose /mg" >
                    <input type="hidden" name="animal_id" value="{{ $animal->id}}">
                   
                </div>
                <div class="my-5 col-6 offset-3">
                    <label for="vaccination_id" class="fw-bold d-block mb-2">Choose Vaccine:</label>
                    <select class="form-control" name="vaccination_id" id="vaccination_id">
                        @foreach($vaccinations as $vaccine)
                        <option value="{{$vaccine->id}}" >{{$vaccine->vaccine}}</option>
>>>>>>> origin/style-brench
                        @endforeach
                    </select>
                </div>
                <div class="text-center">
                    <button class="btn edit-button" type="submit">Add Vaccination</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="row my-5">
            <div class="col-6">
                <h2>Edit Vaccination</h2>
            </div>
            <div class="col-6 text-end">
                <a class="btn btn-warning" href="{{ route('admin.animals.index.vaccine', ['animal' => $animal]) }}">Back</a>
            </div>
        </div>
        <div class="col-7">
            <form action="{{ route('admin.animals.update.vaccine', ['animal' => $animal, 'animal_vaccination' => $animal_vaccination]) }}" method="POST">
                @method('PUT')
                @csrf
    
                {{-- DATE INJECTION --}}
                <div class="form-group mt-4">
                    <label class="mb-2" for="date_injection">Date of Injection</label>
                    <input type="date" name="date_injection" id="date_injection" class="form-control" autofocus required value="{{ old('date_injection', $animal_vaccination->date_injection) }}">
                </div>
    
                {{-- DOSE --}}
                <div class="form-group mt-4">
                    <label class="mb-2" for="dose">Vaccine Dose</label>
                    <input type="number" min="0" max="100" step=".1" name="dose" id="dose" class="form-control" placeholder="Enter Dose in mg" required value="{{ old('dose', $animal_vaccination->dose) }}">
                </div>
    
                {{-- BOOSTER DATE --}}
                <div class="form-group mt-4">
                    <label class="mb-2" for="booster_date">Booster Date</label>
                    <input type="date" name="booster_date" id="booster_date" class="form-control" required value="{{ old('booster_date', $animal_vaccination->booster_date) }}">
                </div>
    
                {{-- ANIMAL ID --}}
                <input type="hidden" name="animal_id" value="{{ $animal->id }}">
    
                {{-- VACCINATION ID --}}
                <div class="form-group mt-4">
                    <label class="mb-2" for="vaccination_id">Vaccino</label>
                    <select class="form-control" name="vaccination_id" id="vaccination_id">
                        @foreach($vaccinations as $vaccine)
                        <option value="{{$vaccine->id}}" {{ old('vaccination_id', $animal_vaccination->vaccination_id) == $vaccine->id ? 'selected' : '' }}>
                            {{$vaccine->vaccine}}
                        </option>
                        @endforeach
                    </select>
                </div>
    
                <button class="btn btn-success mt-4" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection

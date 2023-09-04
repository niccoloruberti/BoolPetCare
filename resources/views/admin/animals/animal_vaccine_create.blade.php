@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="my-4 d-flex justify-content-start">
            <a href="{{route('admin.animals.index.vaccine', ['animal'=>$animal])}}" class="btn btn-sm back-button"><i class="fa-regular fa-circle-left fa-l me-2" style="color: #ad4e1a;"></i>Vaccination Record</a>
        </div>
        <div class="row my-5">
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
                    <input type="date" name="date_injection" id="date_injection" required>
                    <label for="booster_date" class="fw-bold ms-5 me-2">Booster Date: </label>
                    <input type="date" name="booster_date" id="booster_date" placeholder="booster" >
                
                
                    <label for="dose" class="fw-bold ms-5 me-3">Injection Dose: </label>
                    <input type="text" name="dose" id="dose" placeholder="dose /mg"required >
                    <input type="hidden" name="animal_id" value="{{ $animal->id}}">
                   
                </div>
                <div class="my-5 col-6 offset-3">
                    <label for="vaccination_id" class="fw-bold d-block mb-2">Choose Vaccine:</label>
                    <select class="form-control" name="vaccination_id" id="vaccination_id" required>
                        @foreach($vaccinations as $vaccine)
                        <option value="{{$vaccine->id}}" >{{$vaccine->vaccine}}</option>
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

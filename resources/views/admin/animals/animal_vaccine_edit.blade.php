@extends('layouts.admin')

@section('content')
<div class="container">

    <div class="my-4 d-flex justify-content-start">
        <a href="{{route('admin.animals.index.vaccine', ['animal'=>$animal])}}" class="btn btn-sm back-button"><i class="fa-regular fa-circle-left fa-l me-2" style="color: #ad4e1a;"></i>Vaccination Record</a>
    </div>
    <div class="col-12 text-center  my-5 fw-bold">
        <h2>Modify a Vaccination to your <span style="color: #1f615f" class="">Pet</span> <i class="fas fa-paw "
            aria-hidden="true" style="color: #1f615f"></i> </h2>
    </div>
    <div class="col-12">
        <form action="{{ route('admin.animals.update.vaccine', ['animal' => $animal, 'animal_vaccination'=>$animal_vaccination]) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mt-5 text-center">
                <label for="date_injection" class="fw-bold  me-2">Injection Date: </label>
                <input type="date" name="date_injection" id="date_injection" >
                <label for="booster_date" class="fw-bold ms-5 me-2">Booster Date: </label>
                <input type="date" name="booster_date" id="booster_date" placeholder="booster" >
            
            
                <label for="dose" class="fw-bold ms-5 me-3">Injection Dose: </label>
                <input type="text" name="dose" id="dose" placeholder="dose /mg" >
                <input type="hidden" name="animal_id" value="{{ $animal->id}}">
                <input type="hidden" name="animal_vaccination_id" value="{{ $animal_vaccination->id }}">
            </div>
            <div class="my-5 col-6 offset-3">
                <label for="vaccination_id" class="fw-bold d-block mb-2">Choose Vaccine:</label>
                <select class="form-control" name="vaccination_id" id="vaccination_id">
                    @foreach($vaccinations as $vaccine)
                    <option value="{{$vaccine->id}}" >{{$vaccine->vaccine}}</option>
                    @endforeach
                </select>
            </div>
            <div class="text-center">

                <button class="btn edit-button" type="submit">Edit Vaccination</button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
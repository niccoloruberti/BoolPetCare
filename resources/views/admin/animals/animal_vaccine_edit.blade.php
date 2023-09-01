@extends('layouts.admin')

@section('content')
    <div class="col-7 offset-1">
        <form action="{{route('admin.animals.update.vaccine', ['animal'=>$animal])}}" method="POST">
            @method('PUT')
            @csrf
            <input type="date" name="date_injection" id="date_injection" value="">
            <input type="text" name="dose" id="dose" placeholder="dose" value="">
            <input type="date" name="booster_date" id="booster_date" placeholder="booster" value="">
            <input type="hidden" name="animal_id" value="{{ $animal->id}}">
            <select class="form-control" name="vaccination_id" id="vaccination_id">
                @foreach($vaccinations as $vaccine)
                <option value="{{$vaccine->id}}">{{$vaccine->vaccine}}</option>
                @endforeach
            </select>
            <button class="btn btn-success" type="submit">Add Vaccination</button>
        </form>
    </div>
@endsection
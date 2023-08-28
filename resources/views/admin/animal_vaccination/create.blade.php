@extends('layouts.admin')

@section('content')
    <div class="col-7 offset-1">
        @dd($animal->id)
        <form action="{{ route('admin.animal_vaccination.store', $animal->id)}}" method="POST">
            @csrf
            <input type="date" name="date_injection" id="date_injection">
            <input type="text" name="dose" id="dose" placeholder="dose">
            <select class="form-control" name="vaccination_id" id="vaccination_id">
                @foreach($vaccinations as $vaccine)
                <option value="{{$vaccine->id}}">{{$vaccine->vaccine}}</option>
                @endforeach
            </select>
            <button class="btn btn-success" type="submit">Add Vaccination</button>
        </form>
    </div>
@endsection
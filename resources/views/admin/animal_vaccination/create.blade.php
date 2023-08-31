@extends('layouts.admin')

@section('content')
    <div class="col-7 offset-1">
        <form action="{{ route('admin.animal_vaccination.store')}}" method="POST">
            @csrf
            <input type="date" name="date_injection" id="date_injection">
            <input type="text" name="dose" id="dose" placeholder="dose">
            <input type="hidden" name="animal_id" value={{$id_animal}}>
            <select class="form-control" name="vaccination_id" id="vaccination_id">
                @foreach($vaccinations as $vaccine)
                <option value="{{$vaccine->id}}">{{$vaccine->vaccine}}</option>
                @endforeach
            </select>
            <button class="btn btn-success" type="submit">Add Vaccination</button>
        </form>
    </div>
@endsection
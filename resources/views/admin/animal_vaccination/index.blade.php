@extends('layouts.admin')

@section('content')
    libretto
    <a class="btn btn-warning" href="{{ route('admin.animal_vaccination.create')}}?animal={{$id_animal}}">Add Vaccination</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Vaccine's Name</th>
                <th scope="col">Pharmaceutical House</th>
                <th scope="col">Date of Injection</th>
                <th scope="col">Dose</th>
                <th scope="col">Date of Booster</th>
            </tr>
        </thead>
        <tbody>
           
            @foreach($animal->vaccinations as $vaccination)
            {{-- @dd($vaccination->pivot->date_injection) --}}
            {{-- @dd($vaccination->vaccine) --}}
           
           
            <tr>
                <th>{{$vaccination->vaccine}}</th>
                <th>{{$vaccination->ph}}</th>
                <td>{{$vaccination->pivot->date_injection}}</td>
                <td>{{$vaccination->pivot->dose}} <strong>mg</strong></td>
                <td>{{$vaccination->pivot->booster_date}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@extends('layouts.admin')

@section('content')
    libretto
    <a class="btn btn-warning" href="{{ route('admin.animals.create.vaccine', ['animal' => $animal])}}">Add Vaccination</a>
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
            {{-- @dd($vaccination->pivot->date_injection) 
             @dd($vaccination->vaccine) --}}
           
           
            <tr>
                <th>{{$vaccination->vaccine}}</th>
                <th>{{$vaccination->ph}}</th>
                <td>{{$vaccination->pivot->date_injection}}</td>
                <td>{{$vaccination->pivot->dose}} mg</td>
                <td>{{$vaccination->pivot->booster_date}}</td>
                 {{-- EDIT BUTTON --}}
                 <td>
                    <a href="{{ route('admin.animals.edit.vaccine', $animal->id)}}" class="btn btn-sm btn-warning">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>

                {{-- DELETE BUTTON --}}
                <td>
                    <form class="d-inline-block" action="{{ route('admin.animals.destroy', $animal->id)}}" onsubmit="return confirm('Sei sicuro di voler eliminare questo vaccino?')" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
@endsection
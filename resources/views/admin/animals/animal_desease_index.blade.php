@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">

        <div class="text-center my-5">
            <h4>Desease History</h4>
            <a class="btn btn-warning my-3" href="{{ route('admin.animals.create.desease', ['animal' => $animal])}}">Add Desease</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Desease</th>
                    <th scope="col">Vaccine</th>
                    <th scope="col">Diagnosis</th>
                    <th scope="col">Notes</th>
                    
                </tr>
            </thead>
            <tbody>
               
               @foreach($animal->deseases as $desease)
                    
               @endforeach
                {{-- @dd($vaccination->pivot->date_injection) 
                 @dd($vaccination->vaccine) --}}
                {{-- @foreach($animal->vaccinations as $vaccination)
               
               
                <tr>
                    <th>{{$vaccination->vaccine}}</th>
                    <th>{{$vaccination->ph}}</th>
                    <td>{{$vaccination->pivot->date_injection}}</td>
                    <td>{{$vaccination->pivot->dose}} mg</td>
                    <td>{{$vaccination->pivot->booster_date}}</td>
                    EDIT BUTTON
                     <td>
                        <a href="{{ route('admin.animals.edit.vaccine', $animal->id)}}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
    
                    DELETE BUTTON 
                    <td>
                        <form class="d-inline-block" action="{{ route('admin.animals.destroy.vaccine', $animal->id)}}" onsubmit="return confirm('Sei sicuro di voler eliminare questo vaccino?')" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach  --}}
            </tbody>
        </table>
    </div>
</div>
@endsection
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">

        <div class="text-center my-5">
            <h4>Desease History</h4>
            <a class="btn btn-warning my-3" href="{{ route('admin.animals.create.desease', ['animal' => $animal])}}">Add Desease</a>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Desease</th>
                    <th scope="col">Vaccine</th>
                    <th scope="col">Diagnosis</th>
                    <th scope="col">Notes</th>
                    <th scope="col">Edit Desease</th>
                    <th scope="col">Delete Desease</th>
                    
                </tr>
            </thead>
            <tbody>
          
                {{-- @dd($vaccination->pivot->date_injection) 
                 @dd($vaccination->vaccine) --}}
                 @foreach($animal->deseases as $desease)
               
               
                <tr>
                    <th>{{$desease->desease}}</th>
                    <th></th>
                    <td>{{$desease->pivot->diagnosis}}</td>
                    <td>{{$desease->pivot->notes}} </td>
                    
                    {{-- EDIT BUTTON --}}
                     <td>
                        <a href="{{ route('admin.animals.edit.desease', $animal->id)}}" class="btn btn-sm edit-button">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
    
                    {{-- DELETE BUTTON  --}}
                    <td>
                        <form class="d-inline-block" action="{{ route('admin.animals.destroy.vaccine', $animal->id)}}" onsubmit="return confirm('Sei sicuro di voler eliminare questo vaccino?')" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm delete-button">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach  
            </tbody>
        </table>
    </div>
</div>
@endsection
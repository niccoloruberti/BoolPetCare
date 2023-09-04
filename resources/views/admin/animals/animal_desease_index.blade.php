@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="my-4 d-flex justify-content-start">
        <a href="{{route('admin.animals.show', ['animal'=>$animal])}}" class="btn btn-sm back-button"><i class="fa-regular fa-circle-left fa-l me-2" style="color: #ad4e1a;"></i>Back to {{$animal->name}}</a>
    </div>
    <div class="row">

        <div class="text-center my-5 fw-bold d-flex justify-content-between align-items-center">
            <h2><i class="fa-solid fa-square-virus" style="color: #1f615f"></i> Desease History</h2>
            <a class="btn add-button my-3" href="{{ route('admin.animals.create.desease', ['animal' => $animal])}}"><i class="fa-solid fa-circle-plus me-2" style="color: #ffffff;"></i> Add Desease</a>
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
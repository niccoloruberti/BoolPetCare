@extends('layouts.admin')
@section('content')
<div class="container">
   <div class="row">
    {{-- <div class="col-12 mt-5">
        <h1>Dettagli tipo: {{ $tecnology->name }}</h1>
        <p>Slug: {{ $tecnology->slug }}</p>
    </div> --}}
    
    <div class="col-12 mt-5">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>titolo</th>
                    <th>slug</th>
                    <th>strumenti</th>
                </tr>
            </thead>
            <tbody>
                @foreach($specie->animals as $animal)
                    <tr>
                        <td>{{$animal->id}}</td>
                        <td>{{$animal->title}}</td>
                        <td>{{$animal->slug}}</td>
                        <td>

                            <a href="{{route('admin.animals.show', $animal->id)}}" class="btn btn-sm btn-primary">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{route('admin.animals.edit', $animal->id)}}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
{{-- la rotta dove entrare per cancellare l'id selezionato; destroy funztion, mentre delete è il metodo --}}
                            <form action="{{ route('admin.animals.destroy', $animal->id) }}" class="d-inline-block" method="animal" onsubmit="return confirm('sei sicuro di voler eliminare questo animal?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash" data-animal-title='{{$animal->title}}'></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   </div>
</div>
@endsection
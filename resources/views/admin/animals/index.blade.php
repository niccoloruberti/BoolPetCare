@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <form action="{{ route('admin.animals.search') }}" method="GET">
                <input type="text" name="search" required/>
                <button class="btn btn-success ms-3" type="submit">Search</button>
            </form>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Specie</th>
                    <th scope="col">Owner</th>
                    <th scope="col">Size</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($animals as $animal)
                    <tr>
                        <th>{{$animal->name}}</th>
                        <td>{{$animal->specie}}</td>
                        <td>{{$animal->owner}}</td>
                        <td>{{$animal->size}}</td>

                        {{-- SHOW BUTTON --}}
                        <td>
                            <a href="{{route('admin.animals.show', $animal->id)}}" class="btn btn-sm btn-success">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>

                        {{-- EDIT BUTTON --}}
                        <td>
                            <a href="{{ route('admin.animals.edit', $animal->id)}}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>

                        {{-- DELETE BUTTON --}}
                        <td>
                            <form class="d-inline-block" action="{{ route('admin.animals.destroy', $animal->id)}}" onsubmit="return confirm('Sei sicuro di voler eliminare questo animale?')" method="POST">
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
    </div>

</div>
@endsection
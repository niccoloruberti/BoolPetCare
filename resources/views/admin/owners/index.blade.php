@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-5 d-flex justify-content-end">
            {{-- <form action="{{ route('admin.animals.search') }}" method="GET">
                <input type="text" name="search" required/>
                <button class="btn btn-success ms-3" type="submit">Search</button>
            </form> --}}
            <a class="btn btn-warning me-2" href="{{ route('admin.owners.create')}}">Add owner</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Cognome</th>
                    <th scope="col">mail</th>
                    <th scope="col">telefono</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($owners as $owner)
                    <tr>
                        <th>{{$owner->name}}</th>
                        <td>{{$owner->surname}}</td>
                        <td>{{$owner->email}}</td>
                        <td>{{$owner->phone}}</td>

                        {{-- SHOW BUTTON --}}
                        <td>
                            <a href="{{route('admin.owners.show', $owner->id)}}" class="btn btn-sm btn-success">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>

                        {{-- EDIT BUTTON --}}
                        <td>
                            <a href="{{ route('admin.owners.edit', $owner->id)}}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>

                        {{-- DELETE BUTTON --}}
                        <td>
                            <form class="d-inline-block" action="{{ route('admin.owners.destroy', $owner->id)}}" onsubmit="return confirm('Sei sicuro di voler eliminare questo proprietario?')" method="POST">
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
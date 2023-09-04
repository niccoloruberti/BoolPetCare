@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="col-12">
        <a href="{{route('admin.dashboard')}}" class="btn btn-md back-button"><i class="fa-regular fa-circle-left fa-l me-2" style="color: #ad4e1a;"></i>Dashboard</a>
    </div>
    <div class="row">
        
        <div class="col-12 my-5 d-flex justify-content-end">
            {{-- <form action="{{ route('admin.animals.search') }}" method="GET">
                <input type="text" name="search" required/>
                <button class="btn btn-success ms-3" type="submit">Search</button>
            </form> --}}
            <a class="btn add-button" href="{{ route('admin.owners.create')}}"><i class="fa-solid fa-circle-plus me-2" style="color: #ffffff;"></i> Add owner</a>
        </div>
        <div class="mb-4">
            <h2>Registered <span style="color: #ad4e1a">Owners <i class="fas fa-person "></i></span></h2>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">e-mail</th>
                    <th scope="col">Telephone number</th>
                    <th scope="col">See more</th>
                    <th scope="col">Modify</th>
                    <th scope="col">Delete</th>
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
                            <a href="{{route('admin.owners.show', $owner->id)}}" class="btn btn-sm show-button">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>

                        {{-- EDIT BUTTON --}}
                        <td>
                            <a href="{{ route('admin.owners.edit', $owner->id)}}" class="btn btn-sm edit-button">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>

                        {{-- DELETE BUTTON --}}
                        <td>
                            <form class="d-inline-block" action="{{ route('admin.owners.destroy', $owner->id)}}" onsubmit="return confirm('Sei sicuro di voler eliminare questo proprietario?')" method="POST">
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
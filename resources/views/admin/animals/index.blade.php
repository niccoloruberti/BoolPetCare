@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <a href="{{route('admin.dashboard')}}" class="btn btn-md back-button"><i class="fa-regular fa-circle-left fa-l me-2" style="color: #ad4e1a;"></i>Dashboard</a>
        </div>
        
        <div class="col-12 my-5 d-flex justify-content-between">
            <div class="col-12 col-md-6">
                <div class="input-group md-form form-sm form-1 pl-0">
                    <form action="{{ route('admin.animals.search') }}" method="GET">
                        <div class="input-group-prepend d-flex">
                         <span class="input-group-text purple lighten-3  " style="background-color: #1f615f" id="basic-text1"><i class="fas fa-paw text-white"
                            aria-hidden="true" ></i></span>
                            <span class="input-group-text purple lighten-3 me-3  " style="background-color: #943400" id="basic-text1"><i class="fas fa-person text-white"
                                aria-hidden="true" ></i></span >
                            <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search"  name="search" required>
                            
                            <button class="btn ms-5 text-white fw-bold button-link d-flex align-items-center" style="background-color:#32b1ac" type="submit"><i class="fa-solid fa-magnifying-glass-arrow-right me-2" style="color: white"></i> Search</button>
                        </div>
                    </form>
                    </div>
               
            </div>
            <a class="btn text-white fw-bold add-button " style="background-color: #E04F00" href="{{ route('admin.animals.create')}}"><i class="fa-solid fa-circle-plus me-2" style="color: #ffffff;"></i>Add New Pet</a>
        </div>
        <table class="table table-hover" >
            <thead class="mt-4 text-center">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Specie</th>
                    <th scope="col">Owner</th>
                    <th scope="col">Size</th>
                    <th scope="col">See More</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody style="cursor: pointer" class="text-center">
                
                @foreach($animals as $animal)
                    <tr>
                        <th style="color: #c08f75">{{$animal->name}}</th>
                        <td>{{$animal->specie}}</td>
                        <td>{{($animal->owner) ? $animal->owner->name.' '.$animal->owner->surname : ''}}</td>
                        <td>{{$animal->size}}</td>

                        {{-- SHOW BUTTON --}}
                        <td>
                            <a href="{{route('admin.animals.show', $animal->id)}}" class="btn btn-sm show-button">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>

                        {{-- EDIT BUTTON --}}
                        <td>
                            <a href="{{ route('admin.animals.edit', $animal->id)}}" class="btn btn-sm edit-button">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>

                        {{-- DELETE BUTTON --}}
                        <td>
                            <form class="d-inline-block" action="{{ route('admin.animals.destroy', $animal->id)}}" onsubmit="return confirm('Sei sicuro di voler eliminare questo animale?')" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger delete-button">
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
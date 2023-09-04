@extends('layouts.admin')

@section('content')
@if($animals->isNotEmpty())
<div class="container">
    <div class="my-4 d-flex justify-content-start">
        <a href="{{route('admin.animals.index')}}" class="btn btn-sm back-button"><i class="fa-regular fa-circle-left fa-l me-2" style="color: #ad4e1a;"></i>All Animals</a>
    </div>
   
    <div class="row">
       <div class="text-center my-4">
        <h2>Search Results</h2>
       </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-hover">
                <thead>
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
                <tbody>
                    
                    @foreach($animals as $animal)
                        <tr>
                            <th>{{$animal->name}}</th>
                            <td>{{$animal->specie}}</td>
                            <td>{{$animal->owner->$name}}</td>
                            <td>{{$animal->size}}</td>
            
                            {{-- SHOW BUTTON --}}
                            <td>
                                <a href="{{route('admin.animals.show', $animal->id)}}" class="btn btn-sm show-button">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
            
                            {{-- EDIT BUTTON --}}
                            <td>
                                <a href="{{route('admin.animals.edit', $animal->id)}}" class="btn btn-sm edit-button">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
            
                            {{-- DELETE BUTTON --}}
                            <td>
                                <form class="d-inline-block" action="{{route('admin.animals.destroy', $animal->id)}}" onsubmit="return confirm('Sei sicuro di voler eliminare questo animale?')" method="POST">
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
            @else 
                <div>
                    <h2>No posts found</h2>
                </div>
        </div>
    </div>
</div>
@endif
@endsection
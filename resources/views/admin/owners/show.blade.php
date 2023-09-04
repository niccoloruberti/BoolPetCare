@extends ('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="my-4 d-flex justify-content-between">
                <a href="{{route('admin.owners.index')}}" class="btn btn-sm back-button"><i class="fa-regular fa-circle-left fa-l me-2" style="color: #ad4e1a;"></i> Back to Owners</a>
                <a href="{{route('admin.animals.create', $owner->id)}}" class="btn btn-sm add-button"><i class="fa-solid fa-circle-plus me-2" style="color: #ffffff;"></i> Add New Pet to {{$owner->name}}</a>
            </div>
            {{-- libretto vaccinazioni --}}
            <div class="my-4 d-flex justify-content-end">
                    {{-- MODIFICATA ROUTE PER PORTARCI DIETRO L'ID DELL'ANIMALE, PROBABILMENTE DA FARE ANCHE NEL PASSAGGIO DATI A STORE PERCHE' RESTITUISCE NULL --}}
                {{-- <a href="{{route('admin.animals.index.vaccine', ['animal' => $animal])}}" class="btn btn-sm btn-primary">Libretto Vaccinazioni</a> --}}
                {{-- qui probabilmente va inserito che riporti agli animali di questo proprietario --}}
            </div>
            <div class="col-12 text-center">
                <h3 class="mb-5"> <span style="color:#E04F00">Owner  <i class="fas fa-person "></i></span> Record</h3>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="col-5 d-flex flex-column ">
                        
                        <span class="fs-3"> Name: <span class="fw-bold">{{$owner->name}}</span></span>
                        <span class="fs-3"> Surname: <span class="fw-bold">{{$owner->surname}}</span></span>
                        <div class="mt-4 d-flex flex-column">
                            <span class="fs-4">Address: {{$owner->address}}</span>
                            <span  class="fs-4">Phone: {{$owner->phone}}</span >
                            <span  class="fs-4">Email: {{$owner->email}}</span >
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mostra tutti gli animali del proprietario --}}
            <div class="col-12 mt-4 ">
                <div class="text-center my-5">

                    <h4>Recorded <span style="color:#1f615f ">Pet</span>:</h4>
                </div>
                <ul>
                    @foreach ($owner->animals as $animal)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Specie</th>
                                <th scope="col">Size</th>
                                <th scope="col">See More</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>{{$animal->name}}</th>
                                <td>{{$animal->specie}}</td>
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
                                        <button type="submit" class="btn btn-sm delete-button">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>                            
                        </tbody>
                    </table>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection



                    
                    


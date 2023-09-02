@extends ('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="my-4 d-flex justify-content-end">
                <a href="{{route('admin.owners.index')}}" class="btn btn-sm btn-primary me-2">All Owners</a>
                <a href="{{route('admin.animals.create', $owner->id)}}" class="btn btn-sm btn-primary">Add Animal</a>
            </div>
            {{-- libretto vaccinazioni --}}
            <div class="my-4 d-flex justify-content-end">
                    {{-- MODIFICATA ROUTE PER PORTARCI DIETRO L'ID DELL'ANIMALE, PROBABILMENTE DA FARE ANCHE NEL PASSAGGIO DATI A STORE PERCHE' RESTITUISCE NULL --}}
                {{-- <a href="{{route('admin.animals.index.vaccine', ['animal' => $animal])}}" class="btn btn-sm btn-primary">Libretto Vaccinazioni</a> --}}
                {{-- qui probabilmente va inserito che riporti agli animali di questo proprietario --}}
            </div>
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        
                        <h3>Name: {{$owner->name}}</h3>
                        <h3>Surname: {{$owner->surname}}</h3>
                        <h4>Address: {{$owner->address}}</h4>
                        <h6>Phone: {{$owner->phone}}</h6>
                        <h6>Email: {{$owner->email}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



                    
                    


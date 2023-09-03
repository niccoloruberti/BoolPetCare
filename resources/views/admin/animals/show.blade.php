@extends ('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="my-4 d-flex justify-content-end">
                <a href="{{route('admin.animals.index')}}" class="btn btn-sm btn-primary">All Animals</a>
            </div>
            {{-- libretto vaccinazioni --}}
            <div class="my-4 d-flex justify-content-end">
                    {{-- MODIFICATA ROUTE PER PORTARCI DIETRO L'ID DELL'ANIMALE, PROBABILMENTE DA FARE ANCHE NEL PASSAGGIO DATI A STORE PERCHE' RESTITUISCE NULL --}}
                <a href="{{route('admin.animals.index.vaccine', ['animal' => $animal])}}" class="btn btn-sm btn-primary">Libretto Vaccinazioni</a>
            </div>
            <div class="my-4 d-flex justify-content-end">
                {{-- MODIFICATA ROUTE PER PORTARCI DIETRO L'ID DELL'ANIMALE, PROBABILMENTE DA FARE ANCHE NEL PASSAGGIO DATI A STORE PERCHE' RESTITUISCE NULL --}}
            <a href="{{route('admin.animals.index.desease', ['animal' => $animal])}}" class="btn btn-sm btn-primary">Cartella Clinica</a>
        </div>
            <div class="col-12 text-center fw-bold my-5">
                <h2>More Info about <span style="color:#E04F00">{{$animal->name}}</span> The <span style="color:#E04F00">{{$animal->specie}}</span></h2>
            </div>
            <div class="col-12 d-flex">

                <div class="d-flex justify-content-around col-7 align-items-center">
                    <div>
                        <h3> Animal's Name: <span style="color:#E04F00">{{$animal->name}}</span></h3>
                        <h3>Owner: <span style="color:#E04F00">{{($animal->owner) ? $animal->owner->name.' '.$animal->owner->surname : ''}}</span></h3>
                        <h4>Specie:<span style="color:#E04F00"> {{$animal->specie}}</span></h4>
                    </div>
                    <div>
                        <h6>Date of birth: {{$animal->date_of_birth}}</h6>
                        <h6>Genre: {{$animal->genre}}</h6>
                        <h6>Weight: {{$animal->weight}} kg</h6>
                        <h6>Size: {{$animal->size}}</h6>
                    </div>
                </div>
                <div class="col-5 d-flex justify-content-end">
                    <img class="my-5" src="{{$animal->img_link}}" alt="" width="300px">
                </div>
            </div>
               
            
        </div>
    </div>
@endsection



                    
                    


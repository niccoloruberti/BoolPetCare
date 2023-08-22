@extends ('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="my-4 d-flex justify-content-end">
                <a href="{{route('admin.animals.index')}}" class="btn btn-sm btn-primary">All Animals</a>
            </div>
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        
                        <h3>Animal's Name: {{$animal->name}}</h3>
                        <h3>Owner: {{$animal->owner}}</h3>
                        <h4>Specie: {{$animal->specie}}</h4>
                        <h6>Date of birth: {{$animal->date_of_birth}}</h6>
                        <h6>Genre: {{$animal->genre}}</h6>
                        <h6>Weight: {{$animal->weight}} kg</h6>
                        <h6>Size: {{$animal->size}}</h6>

                    </div>
                </div>
                <div>
                    <img class="my-5" src="{{$animal->img_link}}" alt="">

                </div>
               
            </div>
        </div>
    </div>
@endsection



                    
                    


@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="my-4 d-flex justify-content-start">
        <a href="{{route('admin.animals.show', ['animal'=>$animal])}}" class="btn btn-sm back-button"><i class="fa-regular fa-circle-left fa-l me-2" style="color: #ad4e1a;"></i>Back to {{$animal->name}}</a>
    </div>
    <div class="row my-5">
        <div class="col-6">
            <h2 class="fw-bold">Vaccination Record</h2>
        </div>
        
        <div class="col-6 text-end">
            <a class="btn add-button" href="{{ route('admin.animals.create.vaccine', ['animal' => $animal]) }}"><i class="fa-solid fa-circle-plus me-2" style="color: #ffffff;"></i> Add Vaccination</a>
        </div>
    </div>

    <table class="table table-hover">
        <thead class="text-center">
            <tr>
                <th scope="col">Vaccine's Name</th>
                <th scope="col">Pharmaceutical House</th>
                <th scope="col">Date of Injection</th>
                <th scope="col">Dose</th>
                <th scope="col">Date of Booster</th>
                <th scope="col">Edit Vaccination</th>
                <th scope="col">Delete Vaccination</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($animal->vaccinations as $vaccination)
            <tr >
                <th>{{$vaccination->vaccine}}</th>
                <th>{{$vaccination->ph}}</th>
                <td>{{$vaccination->pivot->date_injection}}</td>
                <td>{{$vaccination->pivot->dose}} mg</td>
                <td>{{$vaccination->pivot->booster_date}}</td>
                {{-- EDIT BUTTON --}}
                <td>
                    <a href="{{ route('admin.animals.edit.vaccine', $animal->id)}}" class="btn btn-sm edit-button">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                {{-- DELETE BUTTON --}}
                <td>
                    <form class="d-inline-block" action="{{ route('admin.animals.destroy.vaccine', $animal->id)}}" onsubmit="return confirm('Sei sicuro di voler eliminare questo vaccino?')" method="POST">
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
@endsection
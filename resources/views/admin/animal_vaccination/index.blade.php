@extends('layouts.admin')

@section('content')
    libretto
    <a class="btn btn-warning" href="{{ route('admin.animal_vaccination.create')}}?animal={{$id_animal}}">Add Vaccination</a>
@endsection
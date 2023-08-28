@extends('layouts.admin')

@section('content')
    libretto
    <a class="btn btn-warning" href="{{ route('admin.animal_vaccination.create')}}">Add Vaccination</a>
@endsection
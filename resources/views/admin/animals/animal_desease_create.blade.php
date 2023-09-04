@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-7 offset-1">
            <form action="{{route('admin.animals.store.desease', ['animal'=>$animal ])}}" method="POST">
                @csrf
                <select class="form-control my-3" name="desease_id" id="desease_id" required>
                    <option value="">Choose desease...</option>
                    @foreach($deseases as $desease)
                    <option value="{{$desease->id}}">{{$desease->desease}}</option>
                    @endforeach
                </select>
                <div class="col-12">
                    <textarea  name="diagnosis" id="diagnosis" placeholder="Diagnosis" required></textarea>
                </div>
                <div class="col-12 my-3">
                    <textarea  name="notes" id="notes" placeholder="Notes" required></textarea>
                </div>
                
                <input type="hidden" name="animal_id" value="{{ $animal->id}}">
                <button class="btn btn-success" type="submit">Add Desease</button>
            </form>
        </div>
    </div>
</div>
@endsection
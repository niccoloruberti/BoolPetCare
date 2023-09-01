@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-7 offset-1">
            <form action="{{route('admin.animals.update.desease', ['animal'=>$animal ])}}" method="POST">
                @method('PUT')
                @csrf
                <select class="form-control my-3" name="desease_id" id="desease_id">
                    @foreach($deseases as $desease)
                    <option value="{{$desease->id}}">{{$desease->desease}}</option>
                    @endforeach
                </select>
                <div class="col-12">
                    <textarea  name="diagnosis" id="diagnosis"></textarea>
                </div>
                <div class="col-12 my-3">
                    <textarea  name="notes" id="notes"></textarea>
                </div>
                
                <input type="hidden" name="animal_id" value="{{ $animal->id}}">
                <button class="btn btn-success" type="submit">Edit Desease</button>
            </form>
        </div>
    </div>
</div>
@endsection
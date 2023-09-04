@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="my-4 d-flex justify-content-start">
        <a href="{{route('admin.animals.index.desease', ['animal'=>$animal])}}" class="btn btn-sm back-button"><i class="fa-regular fa-circle-left fa-l me-2" style="color: #ad4e1a;"></i>Back to Deseases History</a>
    </div>
    <div class="row">
        <div class="col-12 text-center my-5">
            <h2>Add to <span style="color: #1f615f">{{$animal->name}}</span> a Desease Record</h2>
        </div>
        <div class="col-6 offset-3">
            <form action="{{route('admin.animals.store.desease', ['animal'=>$animal ])}}" method="POST">
                @csrf
                <div class="text-center my-5">
                    <label for="desease_id" class="fw-bold">Choose Desease:</label>
                    <select class="form-control my-3" name="desease_id" id="desease_id">
                        @foreach($deseases as $desease)
                        <option value="{{$desease->id}}">{{$desease->desease}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 mt-4">
                    <div class="col d-flex">
                        <label for="diagnosis" class="me-3 fw-bold">Diagnosis: </label>
                        <textarea class="col"  name="diagnosis" id="diagnosis"></textarea>
                    </div>
                
                    <div class="col d-flex my-4">
                        <label for="notes" class="me-5 fw-bold">Notes: </label>
                    <textarea class="col" name="notes" id="notes" ></textarea>
                    </div>
                </div>
                
                <input type="hidden" name="animal_id" value="{{ $animal->id}}">
                <div class="text-center mt-5">

                    <button class="btn edit-button" type="submit">Add Desease</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
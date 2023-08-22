@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-between my-4">
        <div class="col my-4">
            <h2 class="text-uppercase">edit</h2>
        </div>
        <div class="col my-4">
            <div class="text-end">
                <a href="{{route('admin.animals.index')}}" class="btn btn-primary">Home</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-2">
                <form action="{{route('admin.animals.update', $animal->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="control-label mb-1">Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="name" value="{{old('name') ?? $animal->name}}">
                    </div>
                    <div class="form-group my-4">
                        <label class="control-label mb-1">Specie</label>
                        <input type="text" id="specie" name="specie" class="form-control" placeholder="specie" value="{{old('specie') ?? $animal->specie}}">
                    </div>
                    <div class="form-group my-4">
                        <label class="control-label mb-1">Date of birth</label>
                        <input type="text" id="date_of_birth" name="date_of_birth" class="form-control" placeholder="date_of_birth" value="{{old('date_of_birth') ?? $animal->date_of_birth}}">
                    </div>
                    <div class="form-group my-4">
                        <label class="control-label mb-1">Genre</label>
                        <input type="text" id="genre" name="genre" class="form-control" placeholder="genre" value="{{old('genre') ?? $animal->genre}}">
                    </div>
                    <div class="form-group my-4">
                        <label class="control-label mb-1">Owner</label>
                        <input type="text" id="owner" name="owner" class="form-control" placeholder="owner" value="{{old('owner') ?? $animal->owner}}">
                    </div>
                    <div class="form-group my-4">
                        <label class="control-label mb-1">Wight</label>
                        <input type="text" id="weight" name="weight" class="form-control" placeholder="weight" value="{{old('weight') ?? $animal->weight}}">
                    </div>
                    <div class="form-group my-4">
                        <label class="control-label mb-1">Size</label>
                        <input type="text" id="size" name="size" class="form-control" placeholder="size" value="{{old('size') ?? $animal->size}}">
                    </div>
                    <div class="form-group my-4">
                        <label class="control-label mb-1">Image</label>
                        <input type="text" id="img_link" name="img_link" class="form-control" placeholder="img_link" value="{{old('img_link') ?? $animal->img_link}}">
                    </div>
                    <div class="form-group my-4">
                        <label class="control-label mb-1">Notes</label>
                        <textarea name="notes" id="notes" cols="30" rows="5" class="form-control" placeholder="notes">{{old('notes') ?? $animal->notes}}</textarea>
                    </div>
                    <div class=" form-group my-4">
                        <button type="submit" class="btn btn-success"> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
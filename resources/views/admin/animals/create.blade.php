@extends('layouts.admin')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-12 my-5">
           <h1 class="">Add new animal</h1>
           <div class="col-12 text-end">
              <div class="">
                  <a href="{{ route('admin.animals.index') }}" class="btn btn-sm btn-primary">All Animals</a>
              </div>
           </div>
       </div>
        
       <div class="col-12">
          <form action="{{ route('admin.animals.store') }}" method="POST">
            @csrf
            {{-- id del proprietario --}}
            <input type="hidden" name="owner_id" id="owner_id" class="form-control"  value="{{ $id_owner }}">

            <div class="form-group mt-4">
               <label for="name">Name</label>
               <input type="text" name="name" id="name" class="form-control"  value="{{ old('name') }}">
            </div>

            <div class="form-group mt-4">
                <label for="specie">Specie</label>
                <input type="text" name="specie" id="specie" class="form-control"  value="{{ old('specie') }}">
            </div>

            <div class="form-group mt-4">
                <label for="date_of_birth">Date of birth</label>
                <input type="text" name="date_of_birth" id="date_of_birth" class="form-control"  value="{{ old('date_of_birth') }}">
            </div>

            <div class="form-group mt-4">
                <label for="genre">Genre</label>
                <input type="text" name="genre" id="genre" class="form-control"  value="{{ old('genre') }}">
            </div>

             <div class="form-group mt-4">
                <label for="owner">Weight</label>
                <input type="text" name="weight" id="weight" class="form-control"  value="{{ old('peso') }}">
             </div>
             <div class="form-group mt-4">
                <label for="owner">Size</label>
                <input type="text" name="size" id="size" class="form-control"  value="{{ old('size') }}">
             </div>
             <div class="form-group mt-4">
                <label for="owner">Image</label>
                <input type="text" name="img_link" id="img_link" class="form-control"  value="{{ old('img_link') }}">
             </div>
             <div class="form-group mt-4">
                <label for="owner">Notes</label>
                <input type="text" name="img_link" id="img_link" class="form-control"  value="{{ old('img_link') }}">
             </div>
             

             <div class="form-group my-4 col-12 text-center">
                <button type="submit" class="btn btn-success">Save</button>
             </div>
        </form>
       </div>
   </div>
</div>
@endsection

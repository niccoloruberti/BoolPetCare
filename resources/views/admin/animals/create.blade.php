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
            <div class="form-group mt-4">
               <label for="name">Name</label>
               <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}" placeholder="Enter Name" required>
               @error('name')
                  <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>

            <div class="form-group mt-4">
               <label for="specie">Specie</label>
               <input type="text" name="specie" id="specie" class="form-control @error('specie') is-invalid @enderror"  value="{{ old('specie') }}" placeholder="Enter Specie" required>
               @error('specie')
                  <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>

            <div class="form-group mt-4">
               <label for="date_of_birth">Date of birth</label>
               <input type="date" name="date_of_birth" id="date_of_birth" class="form-control"  value="{{ old('date_of_birth') }}" placeholder="Enter Date of birth">
            </div>

            <div class="form-group mt-4">
               <label for="genre">Genre</label>
               <input type="text" name="genre" id="genre" class="form-control @error('genre') is-invalid @enderror"  value="{{ old('genre') }}"  placeholder="Enter Genre">
               @error('genre')
                  <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>

            <div class="form-group mt-4">
               <label for="owner">Owner</label>
               <input type="text" name="owner" id="owner" class="form-control @error('owner') is-invalid @enderror"  value="{{ old('owner') }}" placeholder="Enter Owner's name and surname" required>
               @error('specie')
                  <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>

            <div class="form-group mt-4">
               <label for="weight">Weight</label>
               <input type="text" name="weight" id="weight" class="form-control"  value="{{ old('weight') }}"  placeholder="Enter Weight">
            </div>
            <div class="form-group mt-4">
               <label for="size">Size</label>
               <input type="text" name="size" id="size" class="form-control"  value="{{ old('size') }}"  placeholder="Enter Size" required>
            </div>
            <div class="form-group mt-4">
               <label for="img_link">Image</label>
               <input type="text" name="img_link" id="img_link" class="form-control"  value="{{ old('img_link') }}"  placeholder="Enter Image link">
            </div>
            <div class="form-group mt-4">
               <label for="notes">Notes</label>
               <textarea name="notes" id="notes" class="form-control"  value="{{ old('notes') }}"  placeholder="Enter Notes"></textarea>
            </div>

            <div class="form-group my-4 col-12 text-center">
               <button type="submit" class="btn btn-success">Save</button>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection

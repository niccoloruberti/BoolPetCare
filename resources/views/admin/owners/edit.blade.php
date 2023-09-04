@extends('layouts.admin')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-12 my-5">
           <h1 class="">Edit Owner</h1>
           <div class="col-12 text-end">
              <div class="">
                  <a href="{{ route('admin.owners.index') }}" class="btn btn-warning me-2">Back</a>
              </div>
           </div>
       </div>
        
       <div class="col-12">
        <form action="{{ route('admin.owners.update', $owner->id) }}" method="POST">
            @csrf
            @method('PUT')
            {{-- nome --}}
            <div class="form-group mt-4">
                <label class="mb-2" for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $owner->name) }}" placeholder="Enter Name" required>
             </div>
            {{-- cognome --}}
            <div class="form-group mt-4">
                <label class="mb-2" for="surname">Surname:</label>
                <input type="text" name="surname" id="surname" class="form-control" value="{{ old('surname', $owner->surname) }}" placeholder="Enter Surname" required>
             </div>
            {{-- indirizzo --}}
            <div class="form-group mt-4">
                <label class="mb-2" for="address">Address:</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ old('address', $owner->address) }}" placeholder="Enter Address" required>
             </div>
            {{-- telefono --}}
            <div class="form-group mt-4">
                <label class="mb-2" for="phone">Phone:</label>
                <input type="tel" name="phone" id="phone" class="form-control" value="{{ old('phone', $owner->phone) }}" placeholder="Enter Phone" required>
             </div>
            {{-- email --}}
            <div class="form-group mt-4">
                <label class="mb-2" for="email">E-mail:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $owner->email) }}" placeholder="Enter E-mail" required>
             </div>
            <div class="form-group my-4 col-12 text-center">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
       </div>
   </div>
</div>
@endsection

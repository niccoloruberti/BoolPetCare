@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="my-4 d-flex justify-content-start">
        <a href="{{ route('admin.owners.index') }}" class="btn btn-sm back-button"><i class="fa-regular fa-circle-left fa-l me-2" style="color: #ad4e1a;"></i> All Owners</a>
    </div>
   <div class="row">
<<<<<<< HEAD
       <div class="col-12 my-5">
           <h1 class="">Add new owner</h1>
           <div class="col-12 text-end">
              <div class="">
                  <a href="{{ route('admin.owners.index') }}" class="btn btn-warning me-2">Back</a>
              </div>
           </div>
       </div>
=======
    <div class="col-12 my-5 text-center">
        <h1 class="">Add New <span style="color:#E04F00">Owner  <i class="fas fa-person "></i></span></h1>
    </div>
>>>>>>> origin/style-brench
        
       <div class="col-12">
          <form action="{{ route('admin.owners.store') }}" method="POST">
            @csrf
<<<<<<< HEAD
            {{-- nome --}}
            <div class="form-group mt-4">
                <label class="mb-2" for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control"  value="{{ old('name') }}" placeholder="Enter Name" required>
               
             </div>
            {{-- cognome --}}
            <div class="form-group mt-4">
                <label class="mb-2" for="surname">Surname:</label>
                <input type="text" name="surname" id="surname" class="form-control"  value="{{ old('surname') }}" placeholder="Enter Surname" required>
             </div>
            {{-- indirizzo --}}
            <div class="form-group mt-4">
                <label class="mb-2" for="address">Address:</label>
                <input type="text" name="address" id="address" class="form-control"  value="{{ old('address') }}" placeholder="Enter Address" required>
             </div>
            {{-- telefono --}}
            <div class="form-group mt-4">
                <label class="mb-2" for="phone">Phone:</label>
                <input type="tel" name="phone" id="phone" class="form-control"  value="{{ old('phone') }}" placeholder="Enter Phone" required>
=======
            <div class="form-group mt-4 d-flex justify-content-around">
                <div class="d-flex align-items-center">
                    <label for="name" class="fw-bold me-3">Name: </label>
                    <input type="text" name="name" id="name" class="form-control"  required>
                </div>
            
            {{-- cognome --}}
                <div class="d-flex align-items-center">
                    <label for="name" class="fw-bold me-3">Surname: </label>
                    <input type="text" name="surname" id="surname" class="form-control"  required>
                </div>
            </div>
            {{-- indirizzo --}}
            <div class="form-group mt-4">
                <label for="name" class="fw-bold mb-2">Address:</label>
                <input type="text" name="address" id="address" class="form-control"  required>
            </div>
            {{-- telefono --}}
            <div class="form-group mt-4">
                <label for="name" class="fw-bold mb-2">Phone:</label>
                <input type="text" name="phone" id="phone" class="form-control"   required>
            </div>
            {{-- email --}}
            <div class="form-group mt-4">
                <label for="name" class="fw-bold mb-2">Email:</label>
                <input type="mail" name="email" id="email" class="form-control"   required>
>>>>>>> origin/style-brench
             </div>
             
           {{-- email --}}
            <div class="form-group mt-4">
                <label class="mb-2" for="email">E-mail:</label>
                <input type="email" name="email" id="email" class="form-control"  value="{{ old('email') }}" placeholder="Enter E-mail" required>
            </div>

            <div class="form-group my-4 col-12 text-center">
                <button type="submit" class="btn edit-button">Save</button>
            </div>
        </form>
       </div>
   </div>
</div>
@endsection

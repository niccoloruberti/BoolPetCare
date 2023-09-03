@extends('layouts.admin')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-12 my-5">
           <h1 class="">Add new owner</h1>
           <div class="col-12 text-end">
              <div class="">
                  <a href="{{ route('admin.owners.index') }}" class="btn btn-sm btn-primary">All Owners</a>
              </div>
           </div>
       </div>
        
       <div class="col-12">
          <form action="{{ route('admin.owners.store') }}" method="POST">
            @csrf
            {{-- nome --}}
            <div class="form-group mt-4">
               <label for="name">Name</label>
               <input type="text" name="name" id="name" class="form-control"  value="{{ old('name') }}">
            </div>
            {{-- cognome --}}
            <div class="form-group mt-4">
                <label for="name">Surname</label>
                <input type="text" name="surname" id="surname" class="form-control"  value="{{ old('surname') }}">
            </div>
            {{-- indirizzo --}}
            <div class="form-group mt-4">
                <label for="name">Address</label>
                <input type="text" name="address" id="address" class="form-control"  value="{{ old('address') }}">
            </div>
            {{-- telefono --}}
            <div class="form-group mt-4">
                <label for="name">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control"  value="{{ old('phone') }}">
            </div>
            {{-- email --}}
            <div class="form-group mt-4">
                <label for="name">Email</label>
                <input type="mail" name="email" id="email" class="form-control"  value="{{ old('email') }}">
             </div>
            <div class="form-group my-4 col-12 text-center">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
       </div>
   </div>
</div>
@endsection

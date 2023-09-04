@extends('layouts.admin')

@section('content')

<div class="container">
   <div class="my-4 d-flex justify-content-start">
      <a href="{{route('admin.animals.index')}}" class="btn btn-sm back-button"><i class="fa-regular fa-circle-left fa-l me-2" style="color: #ad4e1a;"></i>All Animals</a>
  </div>
   <div class="row">
      <div class="col my-4 text-center">
         <h2 class="">Add <span style="color: #1f615f">Pet</span><i class="fas fa-paw ms-2 " style="color: #1f615f"></i> Record</h2>
     </div>
      
       <div class="col-12">
          <form action="{{ route('admin.animals.store') }}" method="POST">
            @csrf
            {{-- id del proprietario --}}
            <input type="hidden" name="owner_id" id="owner_id" class="form-control"  value="{{ $id_owner }}">

              {{-- NAME --}}
              <div class="form-group d-flex justify-content-around"> 
               <div class="d-flex me-3">
                   <label class="control-label fw-bold mb-2 me-2" for="name">Name: </label>
                   <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Enter Name" autofocus required>
                   @error('name')
                       <div class="text-danger">{{ $message }}</div>
                   @enderror
               </div>
               <div class="d-flex me-3">
                   <label class="control-label mb-2 fw-bold me-2">Specie: </label>
                   <input type="text" id="specie" name="specie" class="form-control @error('specie') is-invalid @enderror" value="{{old('specie')}}" placeholder="Enter Specie" required>
                   @error('specie')
                       <div class="text-danger">{{ $message }}</div>
                   @enderror
               </div>
          
           </div>

           {{-- SPECIE --}}
           

           {{-- DATE OF BIRTH --}}
           <div class="form-group my-4 d-flex justify-content-around my-5">
               <div class="d-flex align-items-center">
                   <label class="control-label mb-2 fw-bold me-3">Birth:</label>
                   <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" value="{{old('date_of_birth')}}" placeholder="Enter Date of birth">
               </div>
          

            {{-- GENRE --}}
               <div class="d-flex align-items-center">
                   <label class="mb-2" for="genre">Genre</label>
                   <select name="genre" id="genre" class="form-control @error('genre') is-invalid @enderror">
                      <option value="" {{ (old('genre') == '') ? 'selected' : '' }}>Choose genre...</option>
                      <option value="M" {{ (old('genre') == 'M') ? 'selected' : '' }}>M</option>
                      <option value="F" {{ (old('genre') == 'F') ? 'selected' : '' }}>F</option>
                   </select>
                   @error('genre')
                      <div class="text-danger">{{ $message }}</div>
                   @enderror
               </div>

            {{-- WEIGHT --}}
               <div class="d-flex align-items-center">
                   <label class="control-label mb-2 me-3 fw-bold">Weight:</label>
                   <input type="number" min="0" max="100" step=".1" id="weight" name="weight" class="form-control @error('weight') is-invalid @enderror" value="{{old('weight')}}" placeholder="Enter Weight">
                   @error('weight')
                       <div class="text-danger">{{ $message }}</div>
                   @enderror
               </div>

               <div class="d-flex align-items-center">
                   <label class="control-label mb-2 me-3 fw-bold">Size</label>
                   <select class="form-control" name="size">
                       <option value="S" {{ (old('size')) === 'S' ? 'selected' : '' }}>S</option>
                       <option value="M" {{ (old('size')) === 'M' ? 'selected' : '' }}>M</option>
                       <option value="L" {{ (old('size')) === 'L' ? 'selected' : '' }}>L</option>
                   </select>
                   @error('size')
                       <div class="text-danger">{{ $message }}</div>
                   @enderror
               </div>
           </div>
            {{-- SIZE --}}

           {{-- IMAGE --}}
           <div class="form-group my-4">
               <label class="control-label mb-2 fw-bold">Image:</label>
               <input type="url" id="img_link" name="img_link" class="form-control @error('img_link') is-invalid @enderror" value="{{old('img_link') }}" placeholder="Enter Image link">
               @error('img_link')
                   <div class="text-danger">{{ $message }}</div>
               @enderror
           </div>

           {{-- NOTES --}}
           <div class="form-group my-4">
               <label class="control-label mb-2 fw-bold">Notes:</label>
               <textarea name="notes" id="notes" cols="30" rows="5" class="form-control" placeholder="Enter Notes">{{old('notes')}}</textarea>
           </div>
           
           <div class=" form-group my-4 text-center">
               <button type="submit" class="btn edit-button"> Save</button>
           </div>
         </form>
      </div>
   </div>
</div>

{{-- SCRIPT --}}
<script>
   // Funzione per applicare l'autocapitalizzazione delle parole a un input
   function applyAutoCapitalize(inputId) {
       var inputElement = document.getElementById(inputId);

       inputElement.addEventListener('input', function() {
           var inputValue = inputElement.value;
           var formattedValue = inputValue.replace(/\b\w/g, function(match) {
               return match.toUpperCase();
           });
           inputElement.value = formattedValue;
       });
   }

   // Applica l'autocapitalizzazione agli input desiderati
   applyAutoCapitalize('name');
   applyAutoCapitalize('specie');
   applyAutoCapitalize('owner');
   applyAutoCapitalize('notes');
</script>
@endsection


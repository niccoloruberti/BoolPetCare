@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-between my-4">
        <div class="col my-4">
            <h2 class="text-uppercase">Edit</h2>
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

                    {{-- NAME --}}
                    <div class="form-group">
                        <label class="control-label mb-2">Name</label>
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name') ?? $animal->name}}" placeholder="Enter Name" autofocus required>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- SPECIE --}}
                    <div class="form-group my-4">
                        <label class="control-label mb-2">Specie</label>
                        <input type="text" id="specie" name="specie" class="form-control @error('specie') is-invalid @enderror" value="{{old('specie') ?? $animal->specie}}" placeholder="Enter Specie" required>
                        @error('specie')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- DATE OF BIRTH --}}
                    <div class="form-group my-4">
                        <label class="control-label mb-2">Date of birth</label>
                        <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" value="{{old('date_of_birth') ?? $animal->date_of_birth}}" placeholder="Enter Date of birth">
                    </div>

                   {{-- GENRE --}}
                    <div class="form-group my-4">
                        <label class="control-label mb-2" for="genre">Genre</label>
                        <select class="form-control" name="genre">
                            <option value="M" {{ (old('genre') ?? $animal->genre) === 'M' ? 'selected' : '' }}>M</option>
                            <option value="F" {{ (old('genre') ?? $animal->genre) === 'F' ? 'selected' : '' }}>F</option>
                        </select>
                        @error('genre')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- OWNER --}}
                    {{-- <div class="form-group my-4">
                        <label class="control-label mb-2">Owner</label>
                        <input type="text" id="owner" name="owner" class="form-control @error('owner') is-invalid @enderror" value="{{old('owner') ?? $animal->owner}}" placeholder="Enter Owner's name and surname" required>
                        @error('owner')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div> --}}

                    {{-- WEIGHT --}}
                    <div class="form-group my-4">
                        <label class="control-label mb-2">Weight</label>
                        <input type="number" min="0" max="100" step=".1" id="weight" name="weight" class="form-control @error('weight') is-invalid @enderror" value="{{old('weight') ?? $animal->weight}}" placeholder="Enter Weight">
                        @error('weight')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- SIZE --}}
                    <div class="form-group my-4">
                        <label class="control-label mb-2">Size</label>
                        <select class="form-control" name="size">
                            <option value="S" {{ (old('size') ?? $animal->size) === 'S' ? 'selected' : '' }}>S</option>
                            <option value="M" {{ (old('size') ?? $animal->size) === 'M' ? 'selected' : '' }}>M</option>
                            <option value="L" {{ (old('size') ?? $animal->size) === 'L' ? 'selected' : '' }}>L</option>
                        </select>
                        @error('size')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- IMAGE --}}
                    <div class="form-group my-4">
                        <label class="control-label mb-2">Image</label>
                        <input type="url" id="img_link" name="img_link" class="form-control @error('img_link') is-invalid @enderror" value="{{old('img_link') ?? $animal->img_link}}" placeholder="Enter Image link">
                        @error('img_link')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- NOTES --}}
                    <div class="form-group my-4">
                        <label class="control-label mb-2">Notes</label>
                        <textarea name="notes" id="notes" cols="30" rows="5" class="form-control" placeholder="Enter Notes">{{old('notes') ?? $animal->notes}}</textarea>
                    </div>
                    
                    <div class=" form-group my-4">
                        <button type="submit" class="btn btn-success"> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
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
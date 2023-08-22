@extends('layouts.admin')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-12">
           <h1 class="">Aggiungi nuovo animale</h1>
           <div>
               <a href="{{ route('admin.animals.index') }}" class="btn btn-sm btn-primary">Tutti gli animali</a>
           </div>
       </div>
        
       <div class="col-12">
          <form action="{{ route('admin.animals.store') }}" method="POST">
            @csrf
            <div class="form-group mt-4">
               <label for="name">Nome</label>
               <input type="text" name="name" id="name" class="form-control" placeholder="Nome" value="{{ old('name') }}">
            </div>

            <div class="form-group mt-4">
                <label for="specie">Specie</label>
                <input type="text" name="specie" id="specie" class="form-control" placeholder="Specie" value="{{ old('specie') }}">
            </div>

            <div class="form-group mt-4">
                <label for="date_of_birth">Data di nascita</label>
                <input type="text" name="date_of_birth" id="date_of_birth" class="form-control" placeholder="Data di nascita" value="{{ old('date_of_birth') }}">
            </div>

            <div class="form-group mt-4">
                <label for="genre">Genere</label>
                <input type="text" name="genre" id="genre" class="form-control" placeholder="Genere" value="{{ old('genre') }}">
            </div>

             <div class="form-group mt-4">
                <label for="owner">Proprietario</label>
                <input type="text" name="owner" id="owner" class="form-control" placeholder="Proprietario" value="{{ old('owner') }}">
             </div>

             <div class="form-group mt-4">
                <label for="owner">peso</label>
                <input type="text" name="weight" id="weight" class="form-control" placeholder="peso" value="{{ old('peso') }}">
             </div>
             <div class="form-group mt-4">
                <label for="owner">taglia</label>
                <input type="text" name="size" id="size" class="form-control" placeholder="taglia" value="{{ old('size') }}">
             </div>
             <div class="form-group mt-4">
                <label for="owner">immagine</label>
                <input type="text" name="img_link" id="img_link" class="form-control" placeholder="immagine" value="{{ old('img_link') }}">
             </div>
             <div class="form-group mt-4">
                <label for="owner">note aggiuntive</label>
                <input type="text" name="img_link" id="img_link" class="form-control" placeholder="note aggiuntive" value="{{ old('img_link') }}">
             </div>
             

             <div class="form-group mt-4">
                <button type="submit" class="btn btn-success">Salva</button>
             </div>
        </form>
       </div>
   </div>
</div>
@endsection

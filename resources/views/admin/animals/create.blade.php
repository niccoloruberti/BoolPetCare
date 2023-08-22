@extends('layouts.admin')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-12">
           <h1 class=""> aggiungi nuovo animale</h1>
           <div>
               <a href="{{Route('admin.animals.index')}}" class="btn btn-sm btn-primary">tutti gli animali</a>
           </div>
       </div>
        
       <div class="col-12">
          <form action="{{ route('admin.animals.store')}}" method="POST">
            {{-- per provenienza richieste --}}
            @csrf
            <div class="form-group mt-4">
               <label class="control-label">nome</label>
               <input type="text" name="name" id="name" placeholder="nome"  class="form-control" value="{{old('name')}}">
            </div>

            <div class="form-group mt-4">
                <label class="control-label">specie</label>
                <input type="text" name="specie" id="specie" placeholder="specie" value="{{ old('specie')}}"></input>
            </div>

            <div class="form-group mt-4">
                <label class="control-label">data di nascita</label>
                <input type="text" name="date_of_birth" id="date_of_birth" placeholder="data di nascita" value="{{ old('date_of_birth')}}"></input>
            </div> 

            <div class="form-group mt-4">
                <label class="control-label">genere</label>
                <input type="text" name="genre" id="genre" placeholder="genere" value="{{ old('genre')}}"></input>
            </div>

             <div class="form-group mt-4">
                <label class="control-label">proprietario</label>
                <input type="text" name="owner" id="date_of_birth" placeholder="proprietario" value="{{ old('date_of_birth')}}"></input>
             </div>
             <div class="form-group mt-4">
                <label class="control-label">peso</label>
                <input type="text" name="weight" id="weight" placeholder="weight" value="{{ old('weight')}}"></input>
             </div>
             <div class="form-group mt-4">
                <label class="control-label">taglia</label>
                <input type="text" name="size" id="size" placeholder="size" value="{{ old('size')}}"></input>
             </div>
             <div class="form-group mt-4">
                <label class="control-label">immagine</label>
                <input type="text" name="img_link" id="img_link" placeholder="" value="{{ old('img_link')}}"></input>
             </div>
             <div class="form-group mt-4">
                <label class="control-label">note aggiuntive</label>
                <textarea type="text" name="notes" id="notes" placeholder="note aggiuntive" value="{{ old('notes')}}"></textarea>
             </div>
             <div class="form-group mt-4">
                <button type="submit" class="btn btn-success">Salva</button>
             </div>
        </form>
       </div>
       
       

   </div>
</div>
@endsection
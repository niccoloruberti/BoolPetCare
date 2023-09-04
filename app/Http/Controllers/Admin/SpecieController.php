<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Specie;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSpecieRequest;
use App\Http\Requests\UpdateSpecieRequest;
class SpecieController extends Controller
{
    public function index()
    {
        $species = Specie::all();
        // path, non nome della rotta
        return view('admin.species.index', compact('species'));
    }

    public function create()
    {
        $species = Specie::all();
        
        return view('admin.species.create', compact('species'));
    }
    

    public function store(StoreSpecieRequest $request)
    {
        
        $form_data = $request->validated();

        $specie = new Specie();
        $specie->name = $form_data['name'];
        $slug = $specie->generateSlug($form_data['name']);
        $form_data['slug'] = $slug;
        $specie->fill($form_data);
    
        $specie->save();
        
        return redirect()->route('admin.species.index');
    }


    public function show(Specie $specie)
    {     
        return view('admin.species.show', compact('specie'));
    }


    public function edit(Specie $specie)
    {
        $species = Specie::all();
        return view('admin.species.edit', compact('specie'));
    }


    public function update(Request $request, Type $type)
    {
        $form_data = $request->all();
        $form_data['slug'] = $specie->generateSlug($form_data['name']);
        $specie->update($form_data);
        return redirect()->route('admin.species.index', $specie->id);
    }

    public function destroy(Type $type)
    {
        {
            // copio per eliminare il file dal progetto
            $specie->delete();
            $message = 'Cancellazione categoria completata';
            return redirect()->route('admin.species.index', ['message' => $message]);
        }
    }
}


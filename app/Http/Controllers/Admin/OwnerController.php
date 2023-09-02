<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Owner;

class OwnerController extends Controller
{
    public function index()
    {
        $owners = Owner::all();
        
        return view('admin.owners.index', compact('owners'));
    }

    public function create()
    {
        return view('admin.owners.create');
    }

    public function store(Request $request)
    {
        $form_data = $request->all();
        
        $owner = new Owner();
        $owner->fill($form_data);
        $owner->save();
        return redirect()->route('admin.owners.index');
    }

    public function show(Owner $owner)
    {
        $id_owner = $owner->id;
        
        return view ('admin.owners.show', compact('owner', 'id_owner'));
    }

    public function edit(Owner $owner)
    { 
            return view('admin.owners.edit', compact('owner'));
        
    }

    public function update(Request $request, Owner $owner)
    {
        $form_data = $request->all();

        $owner->update($form_data);

        return redirect()->route('admin.owners.show', $owner->id);
    }

    public function destroy(Owner $owner)
    {   
        $owner->delete();

        return redirect()->route('admin.owners.index');
    }
}

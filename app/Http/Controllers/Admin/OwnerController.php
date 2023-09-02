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
}

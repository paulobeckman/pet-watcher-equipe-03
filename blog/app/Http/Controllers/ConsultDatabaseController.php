<?php

namespace App\Http\Controllers;

use App\Owners;
use App\Animals;
use Illuminate\Http\Request;

class ConsultDatabaseController extends Controller
{
    
    function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $databaseOwners = Owners::all();
        $databaseAnimals = Animals::all();
        
        return view('consult.index', compact('databaseOwners', 'databaseAnimals'));
    }

    public function show($id)
    {
        $databaseAnimals = Animals::findOrFail($id);
        $databaseOwners = Owners::findOrFail($id);

        return view('consult.show', ['databaseOwners' => $databaseOwners], ['databaseAnimals' => $databaseAnimals]);
    }

}
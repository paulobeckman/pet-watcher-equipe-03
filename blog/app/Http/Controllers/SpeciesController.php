<?php

namespace App\Http\Controllers;

use App\Species;
use Illuminate\Http\Request;

class SpeciesController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $species = Species::all();
        return view('species.index', compact('species'));
    }


    public function create()
    {
        return view('species.create');
    }


    public function store(Request $request)
    {
        $specie = Species::create($request->all());
        $specie->save();

        // $specie = new Species();
        // $specie->name = $request->name;
        // $specie->save();
        return redirect('species');
    }

    public function show($id)
    {
        $specie = Species::findOrFail($id);
        // return view('species.show', ['page_title' => 'Contato:', 'data' => $specie]);
        return view('species.show', ['specie' => $specie]);
    }


    public function edit($id)
    {
        $specie = Species::findOrFail($id);
        return view('species.edit', ['specie' => $specie]);
        // return view('species.edit', compact('species'));
    }


    public function update(Request $request, $id)
    {

        $species = Species::findOrFail($id);
        $species->fill($request->all());
        $species->save();

        // $specie = Species::findOrFail($id);
        // $specie->name = $request->name;
        // $specie->save();
        return redirect('species');
    }


    public function destroy($id)
    {
        $specie = Species::findOrFail($id);
        $specie->delete();
        return redirect('species');
    }
}

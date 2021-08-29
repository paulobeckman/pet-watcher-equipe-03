<?php

namespace App\Http\Controllers;

use App\Accredited;
use App\owners;
use App\Animals;
use App\Species;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $animals = Animals::all();

        return view('animals.index', compact('animals'));
    }

    public function create( Request $request)
    {
        $dataO = owners::all();
        $dataSpecies = Species::all();
        $data = Accredited::all();
        return view('animals.create',compact('dataO', 'data', 'dataSpecies'));
       
    }

    public function store(Request $request)
    {
        $animals = Animals::create($request->all());
        // $id = $request->id;
        // $accredited = Accredited::find($id);
        // $animals->id_accredited_responsible = $accredited->id;

        $animals->save();

        return redirect('animals')->with( 'success_message', 'Cadastro efetuado com sucesso!' );
    }

    public function show($id)
    {
        $animal = Animals::findOrFail($id);

        return view('animals.show', ['animal' => $animal]);
    }

    public function edit($id)
    {
        $animals = Animals::findOrFail($id);
        $dataO = owners::all();
        $dataSpecies = Species::all();
        $data = Accredited::all();

        return view('animals.edit',compact('dataO', 'data', 'dataSpecies', 'animals'));
    }

    public function update(Request $request, $id)
    {
        $animals = Animals::findOrFail($id);
        $animals->fill($request->all());
        $animals->save();

        return redirect('animals')->with( 'success_message', 'Edição efetuada com sucesso!' );
    }

    public function destroy($id)
    {
        $animal = Animals::findOrFail($id);
        $animal->delete();
        return redirect('animals')->with('success_message', 'Cadastro excluído com sucesso!');
    }

    public function active(Request $request)
    {
        $animals = Animals::findOrFail($request->id);
        $animals->active = $request->active;
        $animals->save();
        return response()->json(['success' => 1]);
    }

}

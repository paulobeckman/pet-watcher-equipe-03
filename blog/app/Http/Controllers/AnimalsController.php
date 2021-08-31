<?php

namespace App\Http\Controllers;

use App\Accredited;
use App\owners;
use App\Animals;
use App\Species;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


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
        $animal = Animals::all().
        $dataO = owners::all();
        $dataSpecies = Species::all();
        $data = Accredited::all();
        return view('animals.create',compact('animal','dataO', 'data', 'dataSpecies'));
       
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

    // public function active(Request $request)
    // {
    //     $animal = Animals::findOrFail($request->id);
    //     $animal->active = $request->active;
    //     $animal->save();
    //     return response()->json(['success' => 1]);
    // }

    public function active(Request $request)
    {
    	Log::info($request->all());
        $animals =Animals::find($request->id);
        $animals->active = $request->active;
        $animals->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $animals = DB::table('animals')->where('name','id','%' .$search. '%')->paginate(5);
        return view('animals.index',['animals' => $animals]);
    }
}

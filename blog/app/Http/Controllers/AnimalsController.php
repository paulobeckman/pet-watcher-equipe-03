<?php

namespace App\Http\Controllers;

use App\Animals;
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

    public function create()
    {
        return view('animals.create');
    }

    public function store(Request $request)
    {
        //$animals = Animals::create($request->all());
        //$animals->save();

        return redirect('animals')->with( 'success_message', 'Cadastro efetuado com sucesso!' );
    }

    public function show($id)
    {
        $animals = Animals::findOrFail($id);

        return view('animals.show', ['animals' => $animals]);
    }

    public function edit($id)
    {
        $animals = Animals::findOrFail($id);

        return view('animals.edit', ['animals' => $animals]);
    }

    public function update(Request $request, $id)
    {
        $animals = Animals::findOrFail($id);
        $animals->fill($request->all());
        $animals->save();

        return redirect('animals')->with( 'success_message', 'Edição efetuada com sucesso!' );
    }


}

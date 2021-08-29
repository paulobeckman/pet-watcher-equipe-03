<?php

namespace App\Http\Controllers;

use App\Animals;
use App\Pedigree;
use Illuminate\Http\Request;

class PedigreeController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pedigrees = Pedigree::all();

        return view('pedigrees.index', compact('pedigrees'));
    }


    public function create()
    {
        $pedigrees = Pedigree::all();
        $animal = Animals::all();
        return view('pedigrees.create', compact('pedigrees', 'animal'));
    }


    public function store(Request $request)
    {
        $pedigree = Pedigree::create($request->all());
        $pedigree->save();

        return redirect('pedigree')->with('success_message', 'Cadastro efetuado com sucesso!');
    }

    public function show($id)
    {
        $pedigree = Pedigree::findOrFail($id);
        return view('pedigrees.show', ['pedigree' => $pedigree]);
    }


    public function edit($id)
    {
        $pedigree = Pedigree::findOrFail($id);
        $animal = Animals::all();
        return view('pedigrees.edit', ['pedigree' => $pedigree], ['animal' => $animal]);
    }

    public function update(Request $request, $id)
    {

        $pedigrees = Pedigree::findOrFail($id);
        $pedigrees->fill($request->all());
        $pedigrees->save();
        return redirect('pedigree')->with('success_message', 'Edição efetuada com sucesso!');
    }


    public function destroy($id)
    {
        $pedigree = Pedigree::findOrFail($id);
        $pedigree->delete();
        return redirect('pedigree')->with('success_message', 'Cadastro excluído com sucesso!');
    }
}

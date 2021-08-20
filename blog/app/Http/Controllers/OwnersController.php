<?php

namespace App\Http\Controllers;

use App\Owners;
use Illuminate\Http\Request;

class OwnersController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $owners = Owners::all();
        return view('owners.index', compact('owners'));
    }


    public function create()
    {
        return view('owners.create');
    }

    public function store(Request $request)
    {
        $owners = Owners::create($request->all());
        $owners->save();
        return redirect('owners');
    }

    public function show($id)
    {
        $owners = Owners::findOrFail($id);

        return view('owners.show', ['owners' => $owners]);
    }


    public function edit($id)
    {
        $owners = Owners::findOrFail($id);
        return view('owners.edit', ['owners' => $owners]);
    }


    public function update(Request $request, $id)
    {

        $owners = Owners::findOrFail($id);
        $owners->fill($request->all());
        $owners->save();

        return redirect('owners')->with('success_message', 'Edição efetuada com sucesso!');
    }


    public function destroy($id)
    {
        $owners = Owners::findOrFail($id);
        $owners->delete();
        return redirect('owners')->with('success_message', 'Cadastro excluído com sucesso!');
    }
}

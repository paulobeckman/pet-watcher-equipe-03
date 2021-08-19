<?php

namespace App\Http\Controllers;

use App\Accredited;
use Illuminate\Http\Request;

class AccreditedController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $accrediteds = Accredited::all();
        return view('accredited.index', compact('accrediteds'));
    }


    public function create()
    {
        return view('accredited.create');
    }


    public function store(Request $request)
    {
        $accredited = Accredited::create($request->all());
        $accredited->save();

        // $specie = new Species();
        // $specie->name = $request->name;
        // $specie->save();
        return redirect('accredited');
    }

    public function show($id)
    {
        $accredited = Accredited::findOrFail($id);
        // return view('species.show', ['page_title' => 'Contato:', 'data' => $accredited]);
        return view('accredited.show', ['accredited' => $accredited]);
    }


    public function edit($id)
    {
        $accredited = Accredited::findOrFail($id);
        return view('accredited.edit', ['accredited' => $accredited]);
        // return view('accredited.edit', compact('accredited'));
    }


    public function update(Request $request, $id)
    {

        $accrediteds = Accredited::findOrFail($id);
        $accrediteds->fill($request->all());
        $accrediteds->save();
        return redirect('accredited');
    }


    public function destroy($id)
    {
        $accredited = Accredited::findOrFail($id);
        $accredited->delete();
        return redirect('accredited');
    }
}

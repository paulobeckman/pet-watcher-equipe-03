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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $species = Species::all();
        return view('species.index', compact('species'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('species.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $specie = Species::create($request->all());
        $specie->save();

        // $specie = new Species();
        // $specie->name = $request->name;
        // $specie->save();
        return redirect('species');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoAnimal  $tipoAnimal
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        $specie = Species::findOrFail($id);
        // return view('species.show', ['page_title' => 'Contato:', 'data' => $specie]);
        return view('species.show', ['specie' => $specie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoAnimal  $tipoAnimal
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $specie = Species::findOrFail($id);
        return view('species.edit', ['specie' => $specie]);
        // return view('species.edit', compact('species'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoAnimal  $tipoAnimal
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoAnimal  $tipoAnimal
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $specie = Species::findOrFail($id);
        $specie->delete();
        return redirect('species');
    }
}

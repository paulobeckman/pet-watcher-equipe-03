<?php

namespace App\Http\Controllers;

use App\animals;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function show(animals $animals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function edit(animals $animals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, animals $animals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function destroy(animals $animals)
    {
        //
    }
}

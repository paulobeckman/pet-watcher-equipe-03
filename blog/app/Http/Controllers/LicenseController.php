<?php

namespace App\Http\Controllers;

use App\Accredited;
use App\Licenses;
use Illuminate\Http\Request;

class LicenseController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $licenses = Licenses::with('license')->get(); 
        $licenses = Licenses::all();
        return view('licenses.index', compact('licenses'));
    }


    public function create()
    {

        $licenses = Licenses::with('license')->get(); 
        $licenses = Licenses::all(); 
        // $selectedLicenses =Licenses::all()->cnpj;
        
        //  $licenses = Accredited::all('cnpj', 'id');
        
        return view('licenses.create', compact('licenses'));
    }


    public function store(Request $request)
    {
        $license = Licenses::create($request->all());
        $license->save();
        return redirect('license');
    }

    public function show($id)
    {
        $license = Licenses::findOrFail($id);
       
        return view('licenses.show', ['license' => $license]);
    }


    public function edit($id)
    {
        $license = Licenses::findOrFail($id);
        return view('licenses.edit', ['license' => $license]);
    }


    public function update(Request $request, $id)
    {

        $licenses = Licenses::findOrFail($id);
        $licenses->fill($request->all());
        $licenses->save();

        return redirect('licenses');
    }


    public function destroy($id)
    {
        $license = Licenses::findOrFail($id);
        $license->delete();
        return redirect('license');
    }
}
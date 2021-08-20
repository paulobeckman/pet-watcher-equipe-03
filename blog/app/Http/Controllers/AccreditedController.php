<?php

namespace App\Http\Controllers;

use App\Accredited;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

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

        $accredited = new User();
        $accredited->name = $request->corporate_reason;
        $accredited->email = $request->email;
        $accredited->password = Hash::make($request->password);
        $accredited->save();
        $accredited->givePermissionTo('user');


        return redirect('accredited')->with('success_message', 'Cadastro efetuado com sucesso!');
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
        return redirect('accredited')->with('success_message', 'Edição efetuada com sucesso!');
    }


    public function destroy($id)
    {
        $accredited = Accredited::findOrFail($id);
        $accredited->delete();
        return redirect('accredited')->with('success_message', 'Cadastro excluído com sucesso!');
    }

    public function status(Request $request)
    {
        $accredited = Accredited::findOrFail($request->id);
        $accredited->status = $request->status;
        $accredited->save();
        return response()->json(['success' => 1]);
    }
    // public function status ( Accredited $accredited ) {
    //     if ( $accredited->status == 0 ) {
    //         $accredited->status = 1;
    //     } else {
    //         $accredited->status = 0;
    //     }
    //     $accredited->save();
    //     return response()->json( [ 'success' => 1 ] );
    // }


}

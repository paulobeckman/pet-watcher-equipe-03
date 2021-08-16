<?php

namespace App\Http\Controllers;

use App\Accredited;
use App\Employees;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $employees = Employees::all();
        return view('employees.index', compact('employees'));
    }


    public function create()
    {
        $data = Accredited::all();
       
        return view('employees.create',['data'=>$data]);
    }


    public function store(Request $request)
    {
        $employee = Employees::create($request->all());
        $employee->save();

        return redirect('employees')->with('success_message', 'Cadastro efetuado com sucesso!');
    }

    public function show($id)
    {
        $employee = Employees::findOrFail($id);
        return view('employees.show', ['employee' => $employee]);
    }


    public function edit($id)
    {
        $employee = Employees::findOrFail($id);
        return view('employees.edit', ['employee' => $employee]);
    }


    public function update(Request $request, $id)
    {

        $employees = Employees::findOrFail($id);
        $employees->fill($request->all());
        $employees->save();

        return redirect('employees')->with('success_message', 'Edição efetuada com sucesso!');
    }


    public function destroy($id)
    {
        $employee = Employees::findOrFail($id);
        $employee->delete();
        return redirect('employees')->with('success_message', 'Cadastro excluído com sucesso!');
    }
}

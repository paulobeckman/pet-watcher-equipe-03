<?php

namespace App\Http\Controllers;

use App\Accredited;
use App\User;
use App\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


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

        return view('employees.create', ['data' => $data]);
    }


    public function store(Request $request)
    {
        $employee = Employees::create($request->all());
        $employee = new User();
        $employee->name = $request->full_name;
        $employee->email = $request->email;
        $employee->password = Hash::make($request->password);
        // $employee->id_user = $request->id;
        $employee->save();
        $employee->givePermissionTo('employee_user');
        return redirect('employee')->with('success_message', 'Cadastro efetuado com sucesso!');
    }

    public function show($id)
    {
        $employee = Employees::findOrFail($id);
        return view('employees.show', ['employee' => $employee]);
    }


    public function edit($id)
    {
        $data = Accredited::all();
        $employee = Employees::findOrFail($id);
        return view('employees.edit', ['data' => $data], ['employee' => $employee]);
    }


    public function update(Request $request, $id)
    {

        $employees = Employees::findOrFail($id);
        $employees->fill($request->all());
        $employees->save();
        return redirect('employee')->with('success_message', 'Edição efetuada com sucesso!');


        // return redirect('employees',['data'=>$data])->with('success_message', 'Edição efetuada com sucesso!');
    }


    public function destroy($id)
    {
        $employee = Employees::findOrFail($id);
        $employee->delete();
        return redirect('employee')->with('success_message', 'Cadastro excluído com sucesso!');
    }
}

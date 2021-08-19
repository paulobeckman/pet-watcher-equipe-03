<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Redirect, Response;
use App\User;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Support\Facades\Hash;
use Session;
use Hash;
use Illuminate\Support\Facades\Hash as FacadesHash;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function postLogin(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        return Redirect::to("login")->with('message', 'Oppes! Você inseriu credenciais inválidas');
    }

    public function postRegister(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();

        $check = $this->create($data);
        return redirect('dashboard')->with( 'success_message', 'Ótimo! Você fez login com sucesso' );
        // return redirect::to("dashboard")->with('success_message', 'Ótimo! Você fez login com sucesso');
    }

    public function dashboard()
    {

        if (Auth::check()) {
            return view('dashboard');
        }
        return Redirect::to("login")->with('message', 'Ops! Você não tem acesso');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }

    public function change_password()
    {
        return view('settings');
    }


    public function update_password(Request $request)
    {
        $request->validate([
            'old_password' => 'required|min:6|max:100',
            'new_password' => 'required|min:6|max:100',
            'confirm_password' => 'required|same:new_password'
        ]);
        
        $current_user = auth()->user();
        

        if (FacadesHash::check($request->old_password, $current_user->password)) {

            $current_user->update([
                'password' => bcrypt($request->new_password)
            ]);

            return redirect()->back()->with('success', 'Senha atualizada com sucesso.');
        } else {
            return redirect()->back()->with('error', 'A senha antiga não corresponde.');

        }
       
        return view('login');
    }
}

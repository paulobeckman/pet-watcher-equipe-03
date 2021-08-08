<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private function validate_rules($user_id = null)
    {
        return [
            'name' => 'required|max:255',
            'email' => $user_id ? "required|email|unique:users,id,$user_id|max:255" : "required|email|unique:users|max:255",
            'username' => $user_id ? "required|unique:users,id,$user_id|max:255" : "required|unique:users|max:255"
        ];
    }

    private $validate_messages = [
        'name.required' => 'Campo nome é obrigatório.',
        'email.required' => 'Campo e-mail é obrigatório.',
        'email.unique' => 'Campo e-mail deve ser único.',
        'username.required' => 'Campo nome de usuário é obrigatório.',
        'username.unique' => 'Campo nome de usuário deve ser único.',
    ];

    // public function index()
    // {
    //     return view('home', ['users' => User::get(), 'page_title' => 'Usuários']);
    // }


}


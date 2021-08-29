<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use DB;
use App\User;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    public function getPassword()
    {

        return view('settings');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:6|same:confirm_password',
            'confirm_password' => 'required',
        ]);

        $user = auth()->user();

        if (Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'A senha atual não corresponde!');
        }

        $user->password = Hash::make($request->new_password);

        $user->save();

        return redirect('/');
    }
}

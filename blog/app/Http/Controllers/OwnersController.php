<?php

namespace App\Http\Controllers;

use App\Owners;
use Illuminate\Http\Request;

class OwnersController extends Controller
{
    function __construct()
        {
            $this->middleware('auth');
        }

        public function index()
        {
            $owners = Owners::all();
            return view('owners.index', compact('owners'));
        }


        public function create()
        {
            return view('owners.create');
        }

         public function store(Request $request)
         {
             $owners = Owners::create($request->all());
             $owners->save();
             return redirect('owners');
         }

}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\People;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(){
        return view('users.create');
    }

    public function create(Request $request){
        $request->validate(
            ['person_name' => 'required|string'],
            ['email' => 'required|string'],
        );

        People::create($request->all());
        return redirect()->back()->with('success', 'User stored.');
    }
}

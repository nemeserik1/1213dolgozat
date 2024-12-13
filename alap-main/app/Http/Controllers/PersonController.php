<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(){
        return view('users.create');
    }

    public function create(Request $request){
        $request->validate(
            ['type' => 'required|string'],
        );

        User::create($request->all());
        return redirect()->back()->with('success', 'User stored.');
    }
}

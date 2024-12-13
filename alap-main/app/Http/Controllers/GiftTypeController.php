<?php

namespace App\Http\Controllers;

use App\Models\GiftType;
use Illuminate\Http\Request;

class GiftTypeController extends Controller
{
    public function index(){
        return view('gift_types.create');
    }

    public function create(Request $request){
        $request->validate(
            ['type_name' => 'required|string'],
        );

        GiftType::create($request->all());
        return redirect()->back()->with('success', 'Gift type stored.');
    }
}

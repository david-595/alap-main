<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PersonController extends Controller
{
    public function create()
    {
        return view('users/create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'person_name'=>'required|string',
            'email'=>'required|string'
        ]);
        People::create($request->all());
        return redirect()->back()->with('success','fasza');
    }
    public function index()
    {
        $users = People::all();
        return view('users/index', compact('users'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\GiftType;
use Illuminate\Http\Request;

class GiftTypeController extends Controller
{
    public function create()
    {
        return view('gift_type/create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'type'=>'required|string'
        ]);
        GiftType::create($request->all());
        return redirect()->back()->with('success','fasza');
    }

    public function index()
    {
        $gifts = GiftType::all();
        return view('gift_type/index', compact('gifts'));
    }
}

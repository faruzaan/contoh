<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data['result'] = \App\Models\User::all();
        return view('user/index')->with($data);
    }
    public function create()
    {
        return view('user/form');
    }
    public function store(Request $request)
    {
        $request->password = bcrypt($request->password);
        $input = $request->all();
        $status = \App\Models\User::create($input);

        return redirect('user/');
    }
}

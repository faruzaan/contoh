<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipeUserController extends Controller
{
    public function index()
    {
        $data['result'] = \App\Models\TipeUser::all();
        return view('user/index')->with($data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function index()
    {
        return view('component');
    }

    public function component(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => ['required', 'min:6', 'confirmed'],
                'password_confirmation' => ['required', 'min:6'],
            ]
        );


        echo "<pre>";
        print_r($request->all());
    }
}

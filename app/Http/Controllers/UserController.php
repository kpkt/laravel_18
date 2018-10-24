<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($name = '', $address = '', $age = 0){
        return view('test.view', compact('name', 'address', 'age'));
    }

    public function display($type){
        if($type == 1)
            return view('test.type_1');
        elseif ($type == 2)
            return view('test.type_2');
    }
}

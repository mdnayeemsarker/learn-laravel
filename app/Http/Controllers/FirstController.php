<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    //

    public function studentinfo(Request $request){
        dd($request->all());
    }

    public function aboutinfo(Request $request){
        dd($request->all());
    }
}

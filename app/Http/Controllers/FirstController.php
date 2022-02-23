<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\SecondController;

class FirstController extends Controller
{
    //

    public function studentinfo(Request $request){
        // dd($request->all());

        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;

        return redirect()->action([SecondController::class, 'nayeemasha']);

    }

    public function aboutinfo(Request $request){
        dd($request->all());
    }
}

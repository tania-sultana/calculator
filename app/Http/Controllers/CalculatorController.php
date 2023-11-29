<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    //input neya
    public function calculator_home()
    {
        $equations = session('equations')?? array();
        $result = session('result') ?? '';
        $data = compact('equations','result');
        return view('calculator')->with('data',$data);
    }
    //data store
    public function calculator_history(Request $request)
    {
        $request->session()->put('equations',array_merge(array($request->input('answer')),$request->session()->get('equations')?? array()));
        eval( '$result = (' . $request->input('answer'). ');' );
        $request->session()->put('result',$result);
        return redirect('/');
    }
}

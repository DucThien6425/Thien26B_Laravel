<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TongController extends Controller
{
    public function showForm()
    {
        return view('sumform');
    }

    public function calculateSum(Request $request)
    {
        $a = $request->input('a');
        $b = $request->input('b');
        $result = $a + $b;

        return view('sumform', compact('result'));
    }
}

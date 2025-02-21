<?php

namespace App\Http\Controllers;

use App\Http\Requests\RuleInserForm;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm () {
        return view('form');
    }

    public function displayInfor (RuleInserForm $Request) {
        $arr = [
            'user' => $user = $Request-> input("user"),
            'phone' => $phone = $Request-> input("phone"),
            'email' => $email = $Request-> input("email"),
            'address' => $address = $Request-> input("address"),
        ];
        return view('form') -> with('arr',$arr);
    }
}

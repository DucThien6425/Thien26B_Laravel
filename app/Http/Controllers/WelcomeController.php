<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome() {
        return '
        <h1>Welcome to Laravel</h1>
        <a href="/student">Students</a>'
        ;
        
    }
    public function demo() {
        return view('demo');
    }
    public function index() {
        $description = "Cái gì zậy bà nội!";
        return view('index')->with(['description'=>$description]);
    }
}

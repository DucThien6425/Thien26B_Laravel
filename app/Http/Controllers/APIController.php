<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RuleNhapSV;

use Illuminate\Support\Facades\Http;
class APIController extends Controller
{
    public function getData(){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        $data = $response -> json();
        return  view('api') -> with('data', $data);
    } 
    
}
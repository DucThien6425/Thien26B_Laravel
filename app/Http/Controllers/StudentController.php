<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function listStudent() {
        return '
        <h1>List of Students</h1>
        <ul>
            <li>Student 1</li>
            <li>Student 2</li>
            <li>Student 3</li>
            <li>Student 4</li>
            <li>Student 5</li>
        </ul>';
    }
    public function StudentDetails($name) { //tham số $name sẽ được truyền vào từ URL
        return '
        <h1>Student Details</h1>
        <p>Name: '.$name.'</p>
        <p>Age: 20</p>
        <p>Address: 123, ABC Street</p>';
    }
    public function ShowURL(Request $request) {//$request là một instance của Illuminate\Http\Request
        return 
        "<h3>{$request->url()}</h3>".
        "<h3>{$request->path()}</h3>";
    }
    public function QueryParams(Request $request) { 
        return 
        "<h1>Query Parameters</h1>".
        "<h3>{$request->query('name')}</h3>".
        "<h3>{$request->query('age')}</h3>";
    }
    
}

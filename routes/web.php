<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TongController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\APIController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
                              //class in controller     //function
Route::get('/', [WelcomeController::class, 'welcome']); 
// Sử dụng controller
Route::get('/student', [StudentController::class, 'listStudent']);
Route::get('/student/{name}', [StudentController::class, 'StudentDetails']); // {name} là tham số truyền vào
Route::get('/show-url', [StudentController::class, 'ShowURL']);
Route::get('/query-params', [StudentController::class, 'QueryParams']); //query-params?name=Thien&age=20 (cần có '?' để truyền tham số)
//Bài tập
Route::get('/sum', [TongController::class, 'showForm']);
Route::post('/sum', [TongController::class, 'calculateSum'])->name('sum.calculate'); // nhỏ này là name Route. Là tổng của cái Route

// không sử dụng view, show ra ngay trong 
Route::get('/', function () {
    return '<h1>welcome</h1>';
});
//Sử dụng View trong Controller
Route::get('/demo',[WelcomeController::class, 'demo']);
Route::get('/index',[WelcomeController::class, 'index']);


Route::get('/thien',[PostController::class, 'index']);
Route::resource('blabla', PostController::class);


// Bài tập
// Tạo form tính tổng A và B (A, B nhập từ form) 
// tạo file ở resources/views/form.blade.php
// tạo route ở routes/web.php
// tạo function ở app/Http/Controllers/StudentController.php trả về view form.blade.php
// Vào route sử dụng hàm get để lấy dữ liệu từ form và trả về view form.blade.php
// Vào route sử dụng hàm post để lấy dữ liệu từ form và trả về kết quả tính tổng A và B


//Bài tập 1:
Route::get('/form', [FormController::class, 'showForm'] );
Route::post('/form',[FormController::class,'displayInfor']);


Route::get('/api',[APIController::class,'getData']);
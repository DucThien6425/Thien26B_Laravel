<?php

namespace App\Http\Controllers;

use App\Http\Requests\RuleInserForm;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        // Lấy danh sách dữ liệu từ session, nếu chưa có thì gán mảng rỗng
        $users = session('users', []);
        return view('form', compact('users'));
    }

    public function displayInfor(RuleInserForm $request)
    {
        // Lấy dữ liệu người dùng nhập
        $userData = [
            'user' => $request->input('user'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
        ];

        // Lấy danh sách người dùng từ session (nếu có), nếu chưa có thì dùng mảng rỗng
        $users = session('users', []);

        // Thêm dữ liệu mới vào mảng
        $users[] = $userData;

        // Lưu lại vào session
        session(['users' => $users]);

        // Trả về view với danh sách dữ liệu cập nhật
        return view('form', compact('users'));
    }
}

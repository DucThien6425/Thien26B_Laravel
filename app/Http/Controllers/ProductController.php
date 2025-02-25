<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    private $apiUrl = "https://656ca88ee1e03bfd572e9c16.mockapi.io/products";

    // Lấy danh sách sản phẩm
    public function index()
    {
        $response = Http::get($this->apiUrl);
        if ($response->successful()) {
            $products = $response->json();
            return view('products.index', compact('products'));
        } else {
            return back()->withErrors(['message' => 'Không thể lấy dữ liệu từ Mock API']);
        }
    }

    // Hiển thị form thêm sản phẩm
    public function create()
    {
        return view('products.create');
    }

    // Lưu sản phẩm mới
    public function store(Request $request)
    {
        $response = Http::post($this->apiUrl, $request->all());

        if ($response->successful()) {
            return redirect()->route('products.index')->with('success', 'Thêm sản phẩm thành công');
        } else {
            return back()->withErrors(['message' => 'Không thể thêm sản phẩm']);
        }
    }

    // Hiển thị form sửa sản phẩm
    public function edit($id)
    {
        $response = Http::get("$this->apiUrl/$id");

        if ($response->successful()) {
            $product = $response->json();
            return view('products.edit', compact('product'));
        } else {
            return back()->withErrors(['message' => 'Không thể lấy dữ liệu sản phẩm']);
        }
    }

    // Cập nhật sản phẩm
    public function update(Request $request, $id)
    {
        $response = Http::put("$this->apiUrl/$id", $request->all());

        if ($response->successful()) {
            return redirect()->route('products.index')->with('success', 'Cập nhật sản phẩm thành công');
        } else {
            return back()->withErrors(['message' => 'Không thể cập nhật sản phẩm']);
        }
    }

    // Xóa sản phẩm
    public function destroy($id)
    {
        $response = Http::delete("$this->apiUrl/$id");

        if ($response->successful()) {
            return redirect()->route('products.index')->with('success', 'Xóa sản phẩm thành công');
        } else {
            return back()->withErrors(['message' => 'Không thể xóa sản phẩm']);
        }
    }
}

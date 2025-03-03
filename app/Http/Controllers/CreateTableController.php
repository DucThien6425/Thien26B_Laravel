<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CreateTableController extends Controller
{
    public function createTable()
    {
        Schema::create('/gau', function ( $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
            $table->mediumText('content');
            $table->boolean('active');
            $table->timestamps();
        });
        echo 'Đã tạo bảng gâu';
    }
}

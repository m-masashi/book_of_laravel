<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index() {
        $data = [
                ['name' => '山田太郎',   'mail' => 'taro@yamada.com'],
                ['name' => '田中さちこ', 'mail' => 'sachiko@yamada.com'],
                ['name' => '鈴木花子',   'mail' => 'hanako@yamada.com']
            ];
        return view('hello.index', [ 'data' => $data ]);
    }
    //public function index() {
    //    $data = ['one', 'two', 'three', 'four', 'five'];
    //    return view('hello.index', [ 'data' => $data ]);
    //}
}
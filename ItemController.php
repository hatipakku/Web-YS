<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        $test = "テストメッセージ";

        return view('item', [
            'test_message' => $test
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    // เรียกหน้าฟอร์ม (Workshop HTML)
    public function index() {
        return view('html101');
    }

    // รับค่าจากฟอร์มมาแสดงผลหน้าใหม่
    public function store(Request $request) {
        $data = $request->all(); // รับค่าทั้งหมดจากฟอร์ม
        return view('display_result', compact('data'));
    }
}

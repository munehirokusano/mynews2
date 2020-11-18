<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopPageController extends Controller
{
    // トップページの表示
    public function index()
    {
        return view('admin.index');
    }
}

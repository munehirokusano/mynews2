<?php

namespace App\Http\Controllers\Release;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopPageController extends Controller
{
    public function index()
    {
        return view('release.topPage.index');
    }
}

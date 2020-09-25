<?php

namespace App\Http\Controllers\Release;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Contact;

class ContactController extends Controller
{
    public function add()
    {
        
    }

    public function input()
    {
        return view('contact.input');
    }

    public function check(Request $request)
    {
        $item = [];
        $courses = [];
        $area = null;

        $this->validate($request, Contact::$rules);
        
        $item = $request->all();
        $courses = $item["course"];
        
        if ($item["area"] == 6) {
            $area = $item["text"];
        } else {
            $area = $item["area"];
        }

        unset($item['_token']);

        return view('contact.check', [
            'item'=> $item ,
            'courses'=> $courses ,
            'area'=> $area
            ]);
    }

    public function create(Request $request)
    {
        $item = [];
        $item = $request->all();

        unset($item['_token']);

        return view('contact.input');
    }
    public function complete(Request $request)
    {

    }
}

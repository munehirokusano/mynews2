<?php

namespace App\Http\Controllers\Release;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function add()
    {
        
    }

    public function input()
    {
        return view('Release.contact.input');
        // $this->validate($request, Profile::$rules);
        
        // $profiles = new Profile;
        // $form = $request->all();
        
        // unset($form['_token']);
        
        // $profiles->fill($form);
        // $profiles->save();
        
        // return redirect('admin/profile/create');
    }
    public function check(Request $request)
    {

    }
    public function create(Request $request)
    {

    }
    public function complete(Request $request)
    {

    }
}
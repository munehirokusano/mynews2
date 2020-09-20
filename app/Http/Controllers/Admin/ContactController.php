<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function add()
    {
        return view('admin.news.create');
    }

    public function index(Request $request)
    {
        // $this->validate($request, Profile::$rules);
        
        // $profiles = new Profile;
        // $form = $request->all();
        
        // unset($form['_token']);
        
        // $profiles->fill($form);
        // $profiles->save();
        
        // return redirect('admin/profile/create');
    }
}
<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;
use App\ProfileHistory;
use Carbon\Carbon;

class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }
    public function create(Request $request)
    {
        $this->validate($request, Profile::$rules);
        
        $profiles = new Profile;
        $form = $request->all();
        
        unset($form['_token']);
        unset($form['image']);
        
        $profiles->fill($form);
        $profiles->save();
        
        return redirect('admin/profile/create');
    }
    public function index(Request $request) {
        $cond_name = $request->cond_name;
        if ($cond_name !='') {
            $posts = Profile::where('name', $cond_name)->get();
        } else {
            $posts = Profile::all();
        }
        return view('admin.profile.index', ['posts' => $posts, 'cond_name'=> $cond_name]);
    }
    public function edit(Request $request) {
        $profiles = Profile::find($request->id);
        if (empty($profiles)) {
            abort(404);
        }
        return view('admin.profile.edit', ['profiles_form' => $profiles]);
    }
    public function update(Request $request)
    {
        $this->validate($request, Profile::$rules);
        $profiles = Profile::find($request->id);
        $profiles_form = $request->all();
        unset($profiles_form['_token']);
        $profiles->fill($profiles_form)->save();
        
        $profiles_histry = new ProfileHistory;
        $profiles_histry->profile_id = $profiles->id;
        $profiles_histry->edited_at = Carbon::now();
        $profiles_histry->save();
        
        return redirect('admin/profile/');
    }
    
    public function delete(Request $request) {
        $profiles = Profile::find($request->id);
        $profiles->delete();
        
        return redirect('admin/profile/');
    
    }
    
    
}

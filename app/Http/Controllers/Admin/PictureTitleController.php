<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\PictureTitle;

class PictureTitleController extends Controller
{
    public function add() {
        return view('admin.pictureTitle.create');    
    }
    
    public function create(Request $request)
    {
        $this->validate($request, PictureTitle::$rules);
        $pictureTitle = new PictureTitle;
        $form = $request->all();
        
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $pictureTitle->image_path = basename($path);
        } else {
            $pictureTitle->image_path = null;
        }
        
        unset($form['_token']);
        unset($form['image']);
        
        $pictureTitle->fill($form);
        $pictureTitle->save();
        
        return redirect('admin/pictureTitle/create');
    }  
    
    public function index(Request $request) {
        $cond_picture_title = $request->cond_picture_title;
        if ($cond_picture_title !='') {
            $posts = PictureTitle::where('title' , $cond_picture_title)->get();
        } else {
            $posts = PictureTitle::all();
        }
        return view('admin.pictureTitle.index',['posts' => $posts, 'cond_picture_title' => $cond_picture_title]);
    }
    
    public function edit(Request $request) {
        $pictureTitle = PictureTitle::find($request->id);
        if (empty($pictureTitle)) {
            abort(404);
        }
        return view('admin.pictureTitle.edit', ['pictureTitle_form' => $pictureTitle]);
    }
    
    public function update(Request $request) {
        $this->validate($request, PictureTitle::$rules);
        $pictureTitle = PictureTitle::find($request->id);
        $pictureTitle_form = $request->all();
        if (isset($pictureTitle_form['image'])) {
        $path = $request->file('image')->store('public/image');
        $pictureTitle->image_path = basename($path);
        unset($pictureTitle_form['image']);
        } elseif (isset($request->remove)) {
        $pictureTitle->image_path = null;
        unset($pictureTitle_form['remove']);
        }
        unset($pictureTitle_form['_token']);
        $pictureTitle->fill($pictureTitle_form)->save();
        
        return redirect('admin/pictureTitle/');
    }
    
    public function delete(Request $request) {
        $pictureTitle = PictureTitle::find($request->id);
        
        $pictureTitle->delete();
        return redirect('admin/pictureTitle/');
    }
}

    
  
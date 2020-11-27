<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Information;
use Storage;

class InformationController extends Controller
{
    public function add()
    {
        return view('admin.information.create');
    }

    public function create(Request $request)
    {
        $this->validate($request, Information::$rules);
        $information = new Information;
        $form = $request->all();

        if (isset($form['file'])) {
            $path = Storage::disk('s3')->putFile('/file', $form['file'], 'public');
            $information->file_path = Storage::disk('s3')->url($path);
        } else {
            $information->file_path = null;
        }

        unset($form['_token']);
        unset($form['file']);
        $information->fill($form);
        $information->save();

        return redirect('admin/news/create');
    }

        public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            // 検索されたら検索結果を取得する
            $posts = Information::where('title', $cond_title)->get();
        } else {
            // それ以外はすべてのニュースを取得する
            $posts = Information::all();
        }
        return view('admin.information.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

        public function edit(Request $request)
    {
        $information = Information::find($request->id);
        if (empty($information)) {
            abort(404);    
        }
        return view('admin.information.edit', ['information_form' => $information]);
    }

        public function update(Request $request)
    {
        $this->validate($request, Information::$rules);
        
        $information = Information::find($request->id);
        
        $information_form = $request->all();
        if ($request->remove == 'true') {
            $information_form['file_path'] = null;
        } elseif ($request->file('file')) {
            $path = Storage::disk('s3')->putFile('/file', $form['file'], 'public');
            $information_form['file_path'] = basename($path);
        } else {
            $information_form['file_path'] = $information->file_path;
        }

        unset($information_form['file']);
        unset($information_form['remove']);
        unset($information_form['_token']);

        $information->fill($information_form)->save();

        return redirect('admin/information');
    }

        public function delete(Request $request)
    {
        $information = Information::find($request->id);
        // 削除する
        $information->delete();
        return redirect('admin/information/');
    }  
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Course;
use Carbon\Carbon;
use Storage;

class CourseController extends Controller
{
    public function add()
    {
        return view('admin.course.create');
    }
    public function create(Request $request)
    {
        $this->validate($request, Course::$rules);
        $course = new Course;
        $form = $request->all();
        
        if (isset($form['image'])) {
            $path = Storage::disk('s3')->putFile('/course', $form['image'], 'public');
            $course->image_path = Storage::disk('s3')->url($path);
        } else {
            $course->image_path = null;
        }
        
        unset($form['_token']);
        unset($form['image']);
        $course->fill($form);
        $course->save();
        
        return redirect('admin/course/create');
    }
    public function index(Request $request)
    {
        $posts = Course::all();
    
        return view('admin.course.index', ['posts' => $posts]);
    }
    // 記事の編集
    public function edit(Request $request)
    {
        $course = Course::find($request->id);
        if (empty($course)) {
            abort(404);
        }
        return view('admin.course.edit', ['course_form' => $course]);
    }
    // 記事の更新
    public function update(Request $request)
    {
        $this->validate($request, Course::$rules);
        $course = Course::find($request->id);
        $course_form = $request->all();
        // 削除のチェックボックスにチェックが入ったとき
        if ($request->remove == 'true') {
            $course_form['image_path'] = null;
        } elseif ($request->file('image')) {
            $path = Storage::disk('s3')->putFile('/course', $course_form['image'], 'public');
            $course->image_path = Storage::disk('s3')->url($path);
        } else {
            $course_form['image_path'] = $course->image_path;
        }
        unset($course_form['_token']);
        unset($course_form['image']);
        unset($course_form['remove']);
        $course->fill($course_form)->save();
        
        $courseHistories = new CourseHistory;
        $courseHistories->course_id = $course->id;
        $courseHistories->edited_at = Carbon::now();
        $courseHistories->save();
        
        return redirect('admin/course/');
    }
    
    // 記事の削除
    public function delete(Request $request)
    {
        $course = Course::find($request->id);
        
        $course->delete();
        return redirect('admin/course/');
    }
}

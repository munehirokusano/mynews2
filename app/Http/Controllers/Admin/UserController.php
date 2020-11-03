<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class UserController extends Controller
{
    public function add()
    {
        return view('admin.user.create');
    }

    public function index(Request $request)
    {
        $cond_name = $request->cond_name;
        if ($cond_name != '') {
            // 検索されたら検索結果を取得する
            $users = User::where('name', 'like', '%'.$cond_name.'%')->get();
        } else {
            // それ以外はすべてのユーザーを取得する
            $users = User::all();
        }
        return view('admin.user.index', [
            'users' => $users,
            'cond_name' => $cond_name
            ]);
    }

    public function delete(Request $request)
    {
        $contact = User::find($request->input('id'));
        $contact->delete();

        return redirect('admin/user/');
    }

    //管理者権限の付与
    public function roleup(Request $request)
    {
        $user_id = $request->input('id');
        $roleup_user = User::find($user_id);

        // $roleup_user->fill(['role'=> 5]);
        $roleup_user->role = 5;
        $roleup_user->save();

        $roleup_user = User::find($request->input('id'));

        // return redirect('admin/user/');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Contact;

class ContactController extends Controller
{
    // 問い合わせ作成画面の表示
    /**
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function add()
    {
        return view('admin.contact.create');
    }

    // 問い合わせ管理者ページの表示
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function index(Request $request)
    {
        $items = Contact::all();

        return view('admin.contact.index', [
            'items'=> $items ,
        ]);
    }

    // 問い合わせの削除
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete(Request $request)
    {
        $contact = Contact::find($request->input('id'));
        $contact->delete();

        return redirect(route('admin.contact'));
    }
}

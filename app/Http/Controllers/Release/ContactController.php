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
    // 問い合わせ入力
    public function input()
    {
        return view('release.contact.input');
    }
    // 問い合わせ確認
    public function check(Request $request)
    {
        $this->validate($request, Contact::$rules);
        
        $item = $request->all();

        $contact_courses = $item["contact_course"];

        $contact_course = implode(',', $contact_courses);
        
        // if ($item["contact_area"] == 6) {
        //     $contact_area = $item["contact_text"];
        // } else {
        //     $contact_area = $item["contact_area"];
        // }

        $contact_area = $item["contact_area"] == 6 ? $item["contact_text"] : $item["contact_area"];

        unset($item['_token']);

        return view('release.contact.check', [
            'item'=> $item ,
            'contact_course'=> $contact_course ,
            'contact_area'=> $contact_area
            ]);
    }

    // 問い合わせ作成
    public function create(Request $request)
    {
        $contact = new Contact;

        $request->session()->regenerateToken();

        $item = $request->all();

        unset($item['_token']);

        $contact->fill($item);
        $contact->save();

        return redirect('contact/complete');
    }

    // 問い合わせ完了
    public function complete(Request $request)
    {
        return view('release.contact.complete');
    }
}

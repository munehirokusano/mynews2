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
        return view('release.contact.input');
    }

    public function check(Request $request)
    {
        $item = [];
        $contact_courses = [];
        $contact_area = null;

        $this->validate($request, Contact::$rules);
        
        $item = $request->all();

        $contact_courses = $item["contact_course"];

        $contact_course = implode(',', $contact_courses);
        
        if ($item["contact_area"] == 6) {
            $contact_area = $item["contact_text"];
        } else {
            $contact_area = $item["contact_area"];
        }

        unset($item['_token']);

        return view('release.contact.check', [
            'item'=> $item ,
            'contact_course'=> $contact_course ,
            'contact_area'=> $contact_area
            ]);
    }

    public function create(Request $request)
    {
        $contact = new Contact;

        $request->session()->regenerateToken();

        $item = [];
        $item = $request->all();

        unset($item['_token']);

        $contact->fill($item);
        $contact->save();

        return redirect('release/contact/complete');
    }
    public function complete(Request $request)
    {
        return view('release.contact.complete');
    }
}

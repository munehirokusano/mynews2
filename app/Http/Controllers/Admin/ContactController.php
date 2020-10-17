<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Contact;

class ContactController extends Controller
{
    public function add()
    {
        return view('admin.contact.create');
    }

    public function index(Request $request)
    {
        $items = Contact::all();

        return view('admin.contact.index', [
            'items'=> $items ,
            ]);
    }

    public function delete(Request $request)
    {
        $contact = Contact::find($request->input('id'));
        $contact->delete();

        return redirect('admin/contact/');
    }
}
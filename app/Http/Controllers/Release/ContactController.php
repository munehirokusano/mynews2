<?php

namespace App\Http\Controllers\Release;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Contact;
use Illuminate\Notifications\Messages\MailMessage;
use App\Mail\SampleNotification;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function add()
    {
        
    }
    // 問い合わせ入力
    public function input()
    {
    
        // $mailMessage = new MailMessage;

        // Mail::to('mk09078193819@gmail.com')->send();

        // \Log::debug(__LINE__.' '.__FILE__);
        // $mailMessage->to('mk09078193819@gmail.com')
        // ->error()
        // ->subject('mail test')
        // ->line('...');
        // \Log::debug(__LINE__.' '.__FILE__);

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

        $name = 'ララベル太郎さん';
        $text = 'これからもよろしくお願いいたします。';
        $to = 'mk09078193819@gmail.com';
        Mail::to($to)->send(new SampleNotification($name, $text));
        
        return redirect('contact/complete');
    }

    // 問い合わせ完了
    public function complete(Request $request)
    {
        return view('release.contact.complete');
    }
}

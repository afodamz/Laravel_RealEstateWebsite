<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Contacts;
use App\mail\ContactUs;

use function GuzzleHttp\Promise\all;
use Symfony\Component\Console\Input\Input;

class ContactusController extends Controller
{
    public function getContact(){
        return view('contact');
    }

    public function submit(Request $request){
        
        // create career
        $contact = new Contacts();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->number = $request->input('number');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        // save career

        
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'subject' => $request->subject,
            'message' => $request->message,
        );
        
        
        if (Contacts::where('email', '=', $request->input('email'))->exists()) {
            Mail::to('info@propertyplace.com.ng')->send(new ContactUs($data));
        }
        
        Mail::to('info@propertyplace.com.ng')->send(new ContactUs($data));
        $contact->save();

        return redirect('/contact')->with('success', 'Message Sent');
    }

    public function newsletter(Request $request){
        $contact = new Contacts;
    }
}

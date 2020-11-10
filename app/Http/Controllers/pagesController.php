<?php

namespace App\Http\Controllers;


use App\HouseList;
use App\LandList;
use App\PropertyRequests;
use Illuminate\Http\Request;
use App\mail\PropertyRequest;
use App\mail\RequestNow;
use Illuminate\Support\Facades\Mail;

class pagesController extends Controller
{
    public function getHome(){
        $homes = HouseList::orderBy('price','desc')->take(3)->get();
        $lands = LandList::orderBy('price','desc')->take(3)->get();
        return view('index', compact(['homes','lands']));
    }

    public function getAbout(){
        return view('about');
    }

    public function getRequest(){
    	return view('request');
    }

    public function getPropertyRequest(Request $request){
        $property = new PropertyRequests();
        $property->name = $request->input('name');
        $property->email = $request->input('email');
        $property->number = $request->input('number');
        $property->message = $request->input('message');
        // save career

        
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'message' => $request->message,
        );
        
        
        if (PropertyRequests::where('email', '=', $request->input('email'))->exists()) {
            Mail::to('info@propertyplace.com.ng')->send(new PropertyRequest($data));
        }
        
        Mail::to('info@propertyplace.com.ng')->send(new PropertyRequest($data));
        $property->save();

        return redirect('request')->with('success', 'Message Sent');
    }

    public function getRequestNow(Request $request){
        $data = array(
            'address' => $request->propaddress,
            'price' => $request->propprice,
            'location' => $request->proplocation,
            'description' => $request->propdesc,
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
        );
        Mail::to('info@propertyplace.com.ng')->send(new RequestNow($data));
        return redirect('/')->with('success', 'Message Sent');
    }

}

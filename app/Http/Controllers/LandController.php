<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\LandList;
use Illuminate\Http\Request;
use App\mail\RequestNow;

class LandController extends Controller
{
    public function getListings(){
        $lands = LandList::paginate(12);
        return view('landlistings')->with('lands', $lands);
    }

    public function getDetails($id){
        $detail = LandList::findOrFail($id);
        $lands = LandList::take(4)->get();
        return view('details.landdetails', compact(['detail', 'lands']));
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
        return redirect('/landlistings')->with('success', 'Message Sent');
    }
}

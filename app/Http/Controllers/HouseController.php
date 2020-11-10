<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\HouseList;
use App\mail\RequestNow;

class HouseController extends Controller
{
    public function getListings(){
        $sales = HouseList::where('rentsale', '=', 'sale')->paginate(12);
        return view('listings')->with('sales', $sales);
    }

    public function getsalesDetails($id){
        $detail = HouseList::findOrFail($id);
        $sales = HouseList::where('rentsale', '=', 'sale')->take(4)->get();
        return view('details.listings-details', compact(['detail', 'sales']));
    }

    public function getSRequestNow(Request $request){
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
        return redirect('listings')->with('success', 'Message Sent');
    }

    public function getRentals(){
        $rents = HouseList::where('rentsale', '=', 'rent')->paginate(12);
        return view('rentals')->with('rents', $rents);
    }

    public function getRentDetails($id){
        $rents = HouseList::findOrFail($id);
        $moren = HouseList::where('rentsale', '=', 'rent')->take(4)->get();
        return view('details.rentalsdetails', compact(['rents', 'moren']));
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
        return redirect('rentals')->with('success', 'Message Sent');
    }

    public function getdeletehouse($id){

    }

    public function getedithouse($id){
        
    }

}

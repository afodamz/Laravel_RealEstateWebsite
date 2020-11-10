<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HouseList;
use App\LandList;

class SearchController extends Controller
{
    public function landsearch(Request $request){
        $type = $request->input('type');
        $leasesale = $request->input('leasesale');
        $size = $request->input('size');
        $city = $request->input('city');
        $price = $request->input('price');
        
        $lands = LandList::where("leasesale", "like", "%$leasesale%")
        ->orWhere("size", "like", "%$size%")
        ->orWhere("city", "like", "%$city%")
        ->orWhere("type", "like", "%$type%")
        ->orWhere("price", "like", "%$price%")->paginate(12);

        return view('search/landsearchresult')->with('lands', $lands);
    }
    
    public function housesearch(Request $request){
        $rentsale = $request->input('type');
        $city = $request->input('city');
        $bedrooms = $request->input('bedrooms');
        $bathrooms = $request->input('bathrooms');
        $price = $request->input('price');
        
        $houses = HouseList::where("rentsale", "like", "%$rentsale%")
        ->orWhere("city", "like", "%$city%")
        ->orWhere("bedrooms", "like", "%$bedrooms%")
        ->orWhere("bathrooms", "like", "%$bathrooms%")
        ->orWhere("price", "like", "%$price%")->paginate(12);

        return view('search/searchresult')->with('houses', $houses);
    }


    
}

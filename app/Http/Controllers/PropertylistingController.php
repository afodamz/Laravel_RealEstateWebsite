<?php

namespace App\Http\Controllers;

use App\HouseList;
use App\LandList;
use Illuminate\Http\Request;


class PropertylistingController extends Controller
{
    public function submithouse(Request $request){
        $request->validate([
            'images' => 'required'
        ]);
        
        $house = new HouseList;
        if($request->hasFile('images')){
            $imagearray = $request->file('images');
            $array_len = count($imagearray);
            $names = [];

            for($i = 0; $i < $array_len; $i++){
                // $imagesize = $imagearray[$i]->getClientSize();
                $image_ext = $imagearray[$i]->getClientOriginalExtension();
                $new_image_name = rand(123456, 999999).".".$image_ext;
                $destination_path = public_path('/assets/img/house');
                $imagearray[$i]->move($destination_path, $new_image_name);
                array_push($names, $new_image_name);
            }

            $house->images = json_encode($names);

            $house->address = $request->input('address');
            $house->city = $request->input('city');
            $house->bedrooms = $request->input('bedrooms'); 
            $house->bathrooms = $request->input('bathrooms'); 
            $house->type = $request->input('type'); 
            $house->rentsale = $request->input('rentsale');
            $house->price = $request->input('price'); 
            $house->description = $request->input('description');
            $house->save();

            return redirect('/admin')->with('status', 'Message Sent');

        }
    }





    public function submitland(Request $request){
        $request->validate([
            'images' => 'required'
        ]);

        $land = new LandList;
        if($request->hasFile('images')){
            $imagearray = $request->file('images');
            $array_len = count($imagearray);
            $names = [];

            for($i = 0; $i < $array_len; $i++){
                // $imagesize = $imagearray[$i]->getClientSize();
                $image_ext = $imagearray[$i]->getClientOriginalExtension();
                $new_image_name = rand(7891234, 9879997).".".$image_ext;
                $destination_path = public_path('/assets/img/land');
                $imagearray[$i]->move($destination_path, $new_image_name);
                array_push($names, $new_image_name);
            }

            $land->images = json_encode($names);

            $land->address = $request->input('address');
            $land->city = $request->input('city');
            $land->size = $request->input('size');
            $land->type = $request->input('type');
            $land->leasesale = $request->input('leasesale');
            $land->price = $request->input('price');
            $land->description = $request->input('description');
            $land->save();


            return redirect('/admin')->with('status', 'Message Sent');

        }
    }
}

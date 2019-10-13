<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlaceController extends Controller
{
   public function placeList()
   {
        $places= Place::all();
        return view('AdminViews/place/place-list',compact('places'));
    }

    public function addPlace()
    {
        return view('AdminViews/place/add-place');
    }

    public function createPlace(Request $request)
    {
        $place_data = [
            'nameSchool' => request()->input('name'),
            'address' => request()-> input('address'),
            'phone' => request()-> input('phone'),
            'managerName' => request()-> input('managerName'),
            'capacity' => request()-> input('capacity')
        ];
        $new_place_object = Place::create($place_data);
        if ($new_place_object && $new_place_object instanceof Place){
            return redirect()->route('place-list')->with('success', 'دانشجوی مورد نظر با موفقیت اضافه شد');
        }
    }

//    public function deletePlace($place_id)
//    {
//        if ($place_id && ctype_digit($place_id)){
//            $place=Place::find($place_id);
//            if ($place && $place instanceof Place){
//                $place->delete();
//                return redirect()->route('place-list');
//            }
//        }
//    }

    public function deletePlace($place_id)
    {
        if ($place_id && ctype_digit($place_id)) {
            $place = Place::find($place_id);
            if ($place && $place instanceof Place) {
                $place->delete();
                return redirect()->route('place-list');
            }
        }
    }

    public function editPlace($place_id)
    {
        if($place_id && ctype_digit($place_id)){
            $place=Place::find($place_id);
            if ($place && $place instanceof Place){
                return view('AdminViews/place/edit',compact('place'));
            }
        }
    }

    public function updatePlace($place_id)
    {
        $place_data=[
          'nameSchool' =>request()->input('nameSchool'),
          'address' =>request()->input('address'),
          'phone' =>request()->input('phone'),
          'managerName' =>request()->input('managerName'),
          'capacity' =>request()->input('capacity')
        ];
        $place = Place::find($place_id);
        $place->update($place_data);
        if($place){
            return redirect()->route('place-list')->with('success', 'اطلاعات دانشجوی مورد نظر شما با موفقیت به روز رسانی شد');
        }
    }
}


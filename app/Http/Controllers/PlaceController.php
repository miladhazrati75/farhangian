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
        return $places->toJson();
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
            return response()->json('دانشجوی مورد نظر با موفقیت اضافه شد');
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
                return response()->json('حوزه با موفقیت حذف شد.');
            }
        }
    }

    public function editPlace($place_id)
    {
        if($place_id && ctype_digit($place_id)){
            $place=Place::find($place_id);
            if ($place && $place instanceof Place){
                return $place->toJson();
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
            return response()->json('اطلاعات دانشجوی مورد نظر شما با موفقیت به روز رسانی شد.');
        }
    }
}


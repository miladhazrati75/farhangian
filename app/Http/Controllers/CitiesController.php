<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CitiesController extends Controller
{
    public function masterpage()
    {
        return view('layout/main');
    }

    public function allOfCities()
    {
        $cities = City::all();
        return view('AdminViews/students/students-list', compact('cities'));
    }

    public function deleteCity($city_id)
    {
        if ($city_id && ctype_digit($city_id)) {
            $city = City::find($city_id);
            if ($city && $city instanceof City) {
                $city->delete();
                return redirect()->route('student-list');
            }
        }
    }

    public function editCity($city_id) //Request $request)
    {
        //$student_id = $request->input('id');
        if ($city_id && ctype_digit($city_id)) {
            $cityItem = City::find($city_id);
            if ($cityItem && $cityItem instanceof City) {
                //return view('site/students/edit', compact('studentItem'));
                return view('AdminViews/students/edit', compact('cityItem'));
            }
        }
    }

    public function updateCity($city_id)
    {
        $city_data = [
            'provinceID' => request()->input('provinceID'),
            'title' => request()->input('title'),
        ];
        $city = City::find($city_id);
        $city->update($city_data);
        if ($city) {
            return redirect()->route('student-list')->with('success', 'اطلاعات دانشجوی مورد نظر شما با موفقیت به روز رسانی شد');
        }
    }

    public function addCity()
    {
        return view('AdminViews/students/add-user');
    }

    public function createCity(Request $request)
    {
        $city_data = [
            'provinceID' => request()->input('provinceID'),
            'title' => request()->input('title'),
        ];
        $new_city_object = City::create($city_data);
        if ($new_city_object && $new_city_object instanceof City) {
            return redirect()->route('student-list')->with('success', 'دانشجوی مورد نظر با موفقیت اضافه شد');
        }
    }
}

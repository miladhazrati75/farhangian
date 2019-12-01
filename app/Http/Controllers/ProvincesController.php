<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;

class ProvincesController extends Controller
{
    public function masterpage()
    {
        return view('layout/main');
    }

    public function allOfProvinces()
    {
        $provinces = Province::all();
        return view('AdminViews/students/students-list', compact('provinces'));
    }

    public function deleteProvince($province_id)
    {
        if ($province_id && ctype_digit($province_id)) {
            $province = Province::find($province_id);
            if ($province && $province instanceof Province) {
                $province->delete();
                return redirect()->route('province-list');
            }
        }
    }

    public function editProvince($province_id) //Request $request)
    {
        //$province_id = $request->input('id');
        if ($province_id && ctype_digit($province_id)) {
            $provinceItem = Province::find($province_id);
            if ($provinceItem && $provinceItem instanceof Province) {
                //return view('site/provinces/edit', compact('provinceItem'));
                return view('AdminViews/provinces/edit', compact('provinceItem'));
            }
        }
    }

    public function updateProvince($province_id)
    {
        $province_data = [
            'title' => request()->input('title'),
        ];
        $province = Province::find($province_id);
        $province->update($province_data);
        if ($province) {
            return redirect()->route('province-list')->with('success', 'اطلاعات دانشجوی مورد نظر شما با موفقیت به روز رسانی شد');
        }
    }

    public function addProvince()
    {
        return view('AdminViews/provinces/add-user');
    }

    public function createProvince(Request $request)
    {
        $province_data = [
            'title' => request()->input('title'),
        ];
        $new_province_object = Province::create($province_data);
        if ($new_province_object && $new_province_object instanceof province) {
            return redirect()->route('student-list')->with('success', 'دانشجوی مورد نظر با موفقیت اضافه شد');
        }
    }
}

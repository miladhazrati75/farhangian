<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;

class ProfileController extends Controller
{
    public function editUser($user_id)
    {
        if ($user_id && ctype_digit($user_id)){
            $professorItem= Student::find($user_id);
            if ($userItem && $userItem instanceof Professor){
                return view('StudentViews/site/profile-student/profile',compact('userItem'));
            }
        }
    }
    public function updateUser($user_id)
    {
        $user_data=[
          'name' => request()->input('name'),
          'family' => request()->input('family'),
          'National_Code' => request()->input('National_Code'),
          'term' => request()->input('term'),
          'student_code' => request()->input('student_code'),
          'professor_name' => request()->input('professor_name'),
          'start_of_internship' => request()->input('start_of_internship'),
          'end_of_internship' => request()->input('end_of_internship'),
          'school_address_of_internship' => request()->input('school_address_of_internship')
        ];
        $user = Student::find($user_id);
        $user->update($user_data);
        if($user){
            return redirect()->route('student-masterpage')->with('success','اطلاعات دانشجوی مورد نظر شما با موفقیت به روز رسانی شد');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Student;
use http\Env\Response;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;

class StudentsController extends Controller
{
    //
    public function masterpage(){
        return view('layout/main');
    }
    public function allOfStudents()
    {
        $students = Student::all();
        return view('site/students/students-list', compact('students'));
    }

    public function deleteStudent($student_id)
    {
        if ($student_id && ctype_digit($student_id)) {
            $student = Student::find($student_id);
            if ($student && $student instanceof Student) {
                $student->delete();
                return redirect()->route('student-list');
            }
        }
    }

    public function editStudent($student_id)
    {
        if ($student_id && ctype_digit($student_id)) {
            $studentItem = Student::find($student_id);
            if ($studentItem && $studentItem instanceof Student) {
                return view('site/students/edit', compact('studentItem'));
            }
        }
    }

    public function updateStudent($student_id)
    {
        //dd
        $this->validate(request(), [
            'name' => 'required',
            'family' => 'required',
            'student_code' => 'required',
            'National_Code' => 'required',
            'term' => 'required',
        ], [
            'name.required' => 'لطفا نام کامل را وارد نمایید.',
            'family.required' => 'لطفا نام خانوادگی کامل را وارد نمایید.',
            'student_code.required' => 'لطفا شماره دانشجویی را بصورت صحیح وارد نمایید.',
            'National_Code.required' => 'لطفا کدملی دانشجو را بصورت صحیح وارد نمایید.',
            'term.required' => 'لطفا ترم تحصیلی دانشجو را وارد نمایید.',
        ]);


        $student_data = [
            'name' => request()->input('name'),
            'family' => request()->input('family'),
            'National_Code' => request()->input('National_Code'),
            'student_code' => request()->input('student_code'),
            'term' => request()->input('term'),
        ];
        $student = Student::find($student_id);
        $student->update($student_data);
        if ($student) {
            return redirect()->route('student-list')->with('success', 'اطلاعات دانشجوی مورد نظر شما با موفقیت به روز رسانی شد');
        }
    }

    public function addStudent()
    {
        return view('site/students/add-user');
    }

    public function createStudent(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'family' => 'required',
            'student_code' => 'required',
            'National_Code' => 'required',
            'term' => 'required',
        ], [
            'name.required' => 'لطفا نام کامل را وارد نمایید.',

            'family.required' => 'لطفا نام خانوادگی کامل را وارد نمایید.',
            'student_code.required' => 'لطفا شماره دانشجویی را بصورت صحیح وارد نمایید.',
            'National_Code.required' => 'لطفا کدملی دانشجو را بصورت صحیح وارد نمایید.',
            'term.required' => 'لطفا ترم تحصیلی دانشجو را وارد نمایید.',
        ]);

        $student_data = [
            'name' => request()->input('name'),
            'family' => request()->input('family'),
            'student_code' => request()->input('student_code'),
            'National_Code' => request()->input('National_Code'),
            'term' => request()->input('term'),
        ];
        $new_student_object = Student::create($student_data);
        if ($new_student_object && $new_student_object instanceof Student) {
            return redirect()->route('student-list')->with('success', 'دانشجوی مورد نظر با موفقیت اضافه شد');
        }

    }

    public function studentInfo()
    {
//        $allOfStudents=Student::join();
        $allOfStudents=Student::all();
        $filename='studentsInfo.csv';
        $handle=fopen($filename,'w+');
        fputcsv($handle,array('name','family','National_Code','student_code','term'));
        foreach ($allOfStudents as $rows){
          fputcsv($handle,array($rows['name'],$rows['family'],$rows['National_Code'],$rows['student_code'],$rows['term']));
        }
        fclose($handle);
        $headers=array(
            'Content-Type'=>'text/csv'
        );

        return \Illuminate\Support\Facades\Response::download($filename,'studentsInfo.csv',$headers);
    }
    public function login(){
        return view('site/login/login');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;

class StudentsController extends Controller
{
    public function masterpage()
    {
        return view('layout/main');
    }

    public function allOfStudents()
    {
        $students = Student::paginate(10);
        return view('AdminViews/students/students-list', compact('students'));
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
        //$student_id = $request->input('id');
        if ($student_id && ctype_digit($student_id)) {
            $studentItem = Student::find($student_id);
            if ($studentItem && $studentItem instanceof Student) {
                //return view('site/students/edit', compact('studentItem'));
                return view('AdminViews/students/edit', compact('studentItem'));
            }
        }
    }

    public function updateStudent($student_id)
    {
        $student_data = [
            'name' => request()->input('name'),
            'family' => request()->input('family'),
            'National_Code' => request()->input('National_Code'),
            'student_code' => request()->input('student_code'),
            'mobileNumber' => request()->input('mobileNumber'),
            'reshte' => request()->input('reshte'),
//            'password' => request()->input('password'),
//            'address' => request()->input('address'),
        ];
        $student = Student::find($student_id);
        $student->update($student_data);
        if ($student) {
            return redirect()->route('student-list')->with('success', 'اطلاعات دانشجوی مورد نظر شما با موفقیت به روز رسانی شد');
        }
    }

    public function addStudent()
    {
        return view('AdminViews/students/add-user');
    }

    public function createStudent(Request $request)
    {
        $student_data = [
            'name' => request()->input('name'),
            'family' => request()->input('family'),
            'student_code' => request()->input('student_code'),
            'National_Code' => request()->input('National_Code'),
            'mobileNumber' => request()->input('mobileNumber'),
            'reshte' => request()->input('reshte'),
            'term' => request()->input('term'),
            'password' => request()->input('password'),
            'address' => request()->input('address'),
        ];
        $new_student_object = Student::create($student_data);
        if ($new_student_object && $new_student_object instanceof Student) {
            return redirect()->route('student-list')->with('success', 'دانشجوی مورد نظر با موفقیت اضافه شد');
        }
    }

    public function studentInfo()
    {
        //        $allOfStudents=Student::join();
        $allOfStudents = Student::all();
        $filename = 'studentsInfo.csv';
        $handle = fopen($filename, 'w+');
        fputcsv($handle, array('name', 'family', 'National_Code', 'student_code', 'mobileNumber', 'reshte', 'term'));
        foreach ($allOfStudents as $rows) {
            fputcsv($handle, array($rows['name'], $rows['family'], $rows['National_Code'], $rows['student_code'], $rows['mobileNumber'], $rows['reshte'], $rows['term']));
        }
        fclose($handle);
        $headers = array(
            'Content-Type' => 'text/csv'
        );

        return \Illuminate\Support\Facades\Response::download($filename, 'studentsInfo.csv', $headers);
    }
    public function importInfo()
    {
        //        $allOfStudents=Student::join();
        // $allOfStudents = Student::all();
        $filename = 'studentsInfo.csv';
        $handle = fopen($filename, 'w+');
        fputcsv($handle, array('name', 'family', 'National_Code', 'student_code', 'term'));
        foreach ($allOfStudents as $rows) {
            fputcsv($handle, array($rows['name'], $rows['family'], $rows['National_Code'], $rows['student_code'], $rows['term']));
        }
        fclose($handle);
        $headers = array(
            'Content-Type' => 'text/csv'
        );

        return \Illuminate\Support\Facades\Response::download($filename, 'studentsInfo.csv', $headers);
    }

    public function login()
    {
        return view('AdminViews/login/login');
    }

    public function details(Request $request)
    {
        if (\Illuminate\Support\Facades\Request::ajax()) {

            $userId = $_GET["userId"];
            $userItem = Student::find($userId);
            return $userItem;
        }
    }

    public function searchStudent()
    {
        if (\Illuminate\Support\Facades\Request::ajax()) {
            $searchValue = $_GET["searchInput"];
            $currentValue = DB::table('students')->where('student_code', $searchValue)->get();
            return $currentValue;
        }
    }
}

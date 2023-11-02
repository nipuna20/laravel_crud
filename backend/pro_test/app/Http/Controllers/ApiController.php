<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Mail;


class ApiController extends Controller
{
    public function create(Request $request)
    {

        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
             'phone' => 'required',

        ]);

        $student = new Student();

        $student->fname = $request->input('fname');
       $student->lname = $request->input('lname');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');

        $student->save();



        return response()->json(['message' => 'Student created successfully']);
    }

    public function update(Request $request, $id)
    {
        
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
           'email' => 'required',
            'phone' => 'required',
        ]);

        $student = Student::findOrFail($id);

        $student->fname = $request->input('fname');
       $student->lname = $request->input('lname');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');

        $student->save();

        return response()->json(['message' => 'Student updated successfully']);
    }

    public function getStudent($id)
    {
        $student = Student::findOrFail($id);
        return response()->json($student);
    }

    public function deleteStudent($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return response()->json(['message' => 'Student deleted successfully']);
    }

    public function getAllStudents()
    {
        $students = Student::all();
        return response()->json($students);
    }
}





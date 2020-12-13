<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $users = Student::all();
        return view('showstudent', compact('users'));
    }

    public function show()
    {
        return view('addstudent');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'roll' => 'required',
            'class' => 'required',
            'email' => 'required',
            'username' => 'required|min:5',
            'password' => 'required|min:6',
        ],[
            'name.required' => 'Name Field is Required',
            'roll.required' => 'Roll Field is Required',
            'class.required' => 'Class Field is Required',
            'email.required' => 'Email Field is Required',
            'username.required' => 'Username Field is Required',
            'password.required' => 'Pasword Field is Required',
        ]);

        Student::create([
            'name' => $request->name,
            'roll' => $request->roll,
            'class' => $request->class,
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password,
        ]);

        return redirect()->back()->with('success', 'Student Successfully Added');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('editstudent', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'roll' => 'required',
            'class' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        Student::findOrFail($id)->update([
            'name' => $request->name,
            'roll' => $request->roll,
            'class' => $request->class,
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password,
        ]);

        return redirect()->to('/')->with('success', 'Student Successfulyy Updated');
    }

    public function delete($id)
    {
        Student::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Student Successfully Deleted');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return response($student);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->class_id = $request->class_id;
        $student->section_id = $request->section_id;
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->photo = $request->photo;
        $student->address = $request->address;
        $student->gander = $request->gander;
        $student->save();
        return response('stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return response($student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->class_id = $request->class_id;
        $student->section_id = $request->section_id;
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->photo = $request->photo;
        $student->address = $request->address;
        $student->gander = $request->gander;
        $student->save();
        return response('update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return response('deleted');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

    public function index()
    {
        $subject = Subject::all();
        return response()->json($subject);
    }


    public function store(Request $request)
    {
        Subject::create($request->all());
        return response('stored');
    }

    public function show(Subject $subject)
    {
        return response()->json($subject);
    }

    public function update(Request $request, Subject $subject)
    {
        $subject->classe_id = $request->classe_id;
        $subject->subject_name = $request->subject_name;
        $subject->subject_code = $request->subject_code;
        $subject->save();
        return response('updated');
        
    }

    public function destroy(Subject $subject)
    {
        $subject->delete();
        return response('deleted');
    }
}

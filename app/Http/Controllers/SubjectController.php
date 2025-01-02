<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function topics($subjectId)
    {
        $subject = Subject::with('topics')->findOrFail($subjectId);
        return view('topics.index', compact('subject'));
    }
    public function getSubjects(Request $request)
    {
        $subjects = Subject::where('class_id', $request->class_id)->get();
        return response()->json($subjects);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use App\Models\Subject;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $classes = ClassModel::all();
        return view('classes.index', compact('classes'));
    }
    public function subjects($classId)
{
    $class = ClassModel::with('subjects')->findOrFail($classId);
    return view('subjects.index', compact('class'));
}
}

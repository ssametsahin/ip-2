<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\ClassModel;
use App\Models\Subject;
use App\Models\TestResult;
use App\Models\Topic;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function send(){
        return view('tests.send' );
    }
    public function show($id)
    {
        $test = Test::with('questions.answer')->findOrFail($id);
        return view('tests.show', compact('test'));
    }
    public function getSubjects(Request $request)
    {
        $subjects = Subject::where('class_id', $request->class_id)->get();

        return response()->json($subjects);
    }

    public function getTopics(Request $request)
    {
        $topics = Topic::where('subject_id', $request->subject_id)->get();

        return response()->json($topics);
    }
    public function index()
    {

        return view('dashboard');
    }

    public function create()
    {
        $classes = ClassModel::all();
        $subjects = Subject::all();
        $topics = Topic::all();

        return view('tests.create', compact('classes', 'subjects', 'topics'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required|exists:classes,id',
            'subject_id' => 'required|exists:subjects,id',
            'topic_id' => 'required|exists:topics,id',
            'test_name' => 'required|string|max:255',
            'questions' => 'required|array|min:1',
            'questions.*.text' => 'required|string',
            'questions.*.option_a' => 'required|string',
            'questions.*.option_b' => 'required|string',
            'questions.*.option_c' => 'required|string',
            'questions.*.option_d' => 'required|string',
            'questions.*.correct_answer' => 'required|in:A,B,C,D',
        ]);

        $test = Test::create([
            'name' => $request->test_name,
            'topic_id' => $request->topic_id,
        ]);

        foreach ($request->questions as $questionData) {
            $question = Question::create([
                'test_id' => $test->id,
                'question_text' => $questionData['text'],
            ]);

            Answer::create([
                'question_id' => $question->id,
                'option_a' => $questionData['option_a'],
                'option_b' => $questionData['option_b'],
                'option_c' => $questionData['option_c'],
                'option_d' => $questionData['option_d'],
                'correct_answer' => $questionData['correct_answer'],
            ]);
        }

        return redirect()->route('classes.index');

}

}

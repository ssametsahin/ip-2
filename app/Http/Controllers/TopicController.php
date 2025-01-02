<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function tests($topicId)
    {
        $topic = Topic::with('tests')->findOrFail($topicId);
        return view('tests.index', compact('topic'));
    }

    public function getTopics(Request $request)
    {
        $topics = Topic::where('subject_id', $request->subject_id)->get();
        return response()->json($topics);
    }
}

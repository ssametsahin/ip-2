@extends('layout')

@section('main')
    <h1>{{ $subject->name }} Konuları</h1>

        @foreach ($subject->topics as $topic)
            <div class="class-box">
                <a href="{{ url('/topic/tests/' . $topic->id) }}">{{ $topic->name }}</a>
            </div>
        @endforeach

@endsection

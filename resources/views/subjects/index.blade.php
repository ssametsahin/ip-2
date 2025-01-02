@extends('layout')

@section('main')
    <h1>{{ $class->name }} Dersleri</h1>
        @foreach ($class->subjects as $subject)
            <div class="class-box">
                <a href="{{ url('/subject/topics/' . $subject->id) }}">{{ $subject->name }}</a>
            </div>
        @endforeach
@endsection


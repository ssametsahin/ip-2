@extends('layout')

@section('main')
        @foreach($classes as $class)
            <div class="class-box">
                <a href="/class/subjects/{{ $class->id }}">{{ $class->name }}</a>
            </div>
        @endforeach

@endsection
